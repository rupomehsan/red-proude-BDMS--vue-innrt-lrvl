<template>
    <section>
        <div class="mt-5">
            <div id="content">
                <h3 class="text-center border border-danger py-1">
                    Select the donor blood type:
                </h3>
                <div id="blood_selector" @click="selectBloodType">
                    <div v-for="type in bloodTypes" :key="type">{{ type }}</div>
                </div>
                <div id="blood_content">
                    <div class="bar"></div>
                    <div class="main_bag">
                        <div
                            class="blood"
                            :style="{ height: bloodBagHeight + 'px' }"
                        ></div>
                    </div>
                </div>
                <div id="center_via_c">
                    <div class="center_via">
                        <div
                            class="blood_via"
                            :style="{ height: centerViaHeight + 'px' }"
                        ></div>
                    </div>
                </div>
                <div id="humans">
                    <div
                        v-for="(type, index) in bloodTypes"
                        :key="index"
                        :class="['human', index % 2 === 0 ? 'left' : 'right']"
                    >
                        <div class="scribble">
                            <span
                                class="blood_type"
                                :class="{
                                    highlightText:
                                        highlightedBloodTypes.includes(type),
                                }"
                            >
                                {{ type }}
                            </span>
                            <div class="head"></div>
                            <div class="body"></div>
                        </div>
                        <div class="via"></div>
                        <div
                            class="blood_via"
                            :style="{
                                width: highlightedBloodTypes.includes(type)
                                    ? '100%'
                                    : '0px',
                            }"
                        ></div>
                    </div>
                </div>
            </div>

        </div>
        <hr />
    </section>
</template>

<script>
export default {
    data() {
        return {
            bloodTypes: ["O−", "O+", "A−", "A+", "B−", "B+", "AB−", "AB+"],
            bloodBagHeight: 100,
            centerViaHeight: 0,
            highlightedBloodTypes: [],
            BLOOD_TYPES: {
                "O−": ["O−", "O+", "A−", "A+", "B−", "B+", "AB−", "AB+"],
                "O+": ["O+", "A+", "B+", "AB+"],
                "A−": ["A−", "A+", "AB−", "AB+"],
                "A+": ["A+", "AB+"],
                "B−": ["B−", "B+", "AB−", "AB+"],
                "B+": ["B+", "AB+"],
                "AB−": ["AB−", "AB+"],
                "AB+": ["AB+"],
            },
            lastCalled: null,
        };
    },
    methods: {
        reset() {
            this.bloodBagHeight = 100;
            this.centerViaHeight = 0;
            this.highlightedBloodTypes = [];
            if (this.lastCalled) {
                this.lastCalled.target.classList.remove("highlight");
                this.lastCalled = null;
            }
        },
        async selectBloodType(e) {
            if (e.target === e.currentTarget) return; // Check if clicked outside of a type

            if (this.lastCalled) this.reset();

            const donor = e.target.innerText;
            this.highlightedBloodTypes = this.BLOOD_TYPES[donor];
            e.target.classList.add("highlight");
            this.lastCalled = e;

            for (let item of this.highlightedBloodTypes) {
                const recipientIndex = this.bloodTypes.indexOf(item);
                const height = 50 + 50 * Math.floor(recipientIndex / 2);
                const bloodHeight = 125 - 25 * Math.floor(recipientIndex / 2);

                this.bloodBagHeight = bloodHeight;
                this.centerViaHeight = height;

                await this.timeout(100); // Small delay for animation-like effect
            }
        },
        timeout(ms) {
            return new Promise((resolve) => setTimeout(resolve, ms));
        },
    },
};
</script>

<style lang="scss" scoped>
#about {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 2;
}
#about a {
    display: inline-block;
    height: 2.5em;
    margin: 0 5px;
}
#about a i {
    font-size: 1.5em;
}
#about a i.fa-linkedin {
    color: #0073b0;
}
#about a i.fa-github,
#about a i.fa-globe {
    color: #24292e;
}
#about a i.fa-twitter {
    color: #1da1f2;
}
#content {
    position: relative;
    margin: 50px auto;
    width: 600px;
    height: 600px;
}

#blood_selector {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: 1fr 1fr;
    grid-gap: 5px;
    width: 200px;
    height: 100px;
    position: absolute;
    left: 10px;
    top: 70px;
    z-index: 2;
}
#blood_selector div {
    user-select: none;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f7f7f7;
    border: 1px solid #b51e23;
    border-radius: 25%;
}
#blood_selector div:hover {
    border: 1px solid #1da1f2;
    font-weight: bold;
    cursor: pointer;
}
#blood_content {
    position: absolute;
    top: 100px;
    width: 100%;
    height: 100%;
}
#center_via_c {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
}
#center_via_c .center_via {
    width: 8px;
    background: #ccc;
    height: 200px;
    position: absolute;
    left: 297px;
    top: 233px;
}
#center_via_c .blood_via {
    height: 0;
    background-color: #b51e23;
    right: 50%;
    width: 8px;
    transition: height 0.25s;
}
/*  .bar {
	 position: fixed;
	 right: 0;
	 top: 55px;
	 width: 55%;
	 height: 8px;
	 border-radius: 2px 0 0 2px;
	 background-color: #ccc;
} */
.main_bag {
    position: absolute;
    width: 100px;
    height: 140px;
    top: 70px;
    left: 250px;
    border-radius: 30px;
    opacity: 0.8;
    background-color: rgba(154, 207, 234, 0.9);
    border: 8px solid rgba(154, 207, 234, 0.9);
}
.main_bag .blood {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100px;
    background-color: #b51e23;
    border-radius: 0 0 35px 35px;
    transition: height 1s;
}
.main_bag .blood::before {
    content: "";
    position: absolute;
    top: -6px;
    width: 100%;
    height: 10px;
    background-color: #92191b;
    border-radius: 100%;
}
.main_bag::before {
    content: "";
    position: absolute;
    top: -118px;
    left: 45%;
    width: 10%;
    height: 110px;
    background-color: #ccc;
}
#humans {
    position: absolute;
    top: 276px;
    width: 400px;
    height: 200px;
    left: 95px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: repeat(4, 1fr);
}
#humans .human {
    position: relative;
}
#humans .human .via {
    position: relative;
    text-align: centre;
    width: 50%;
    height: 8px;
    background-color: #ccc;
    bottom: 0;
}
#humans .human .blood_via {
    position: absolute;
    height: 8px;
    background-color: #b51e23;
    width: 0;
    bottom: 0;
    transition: width 1s;
}
#humans .human.left {
    display: grid;
    justify-content: left;
    align-content: center;
}
#humans .human.left .blood_via {
    right: 0;
}
#humans .human.left .scribble {
    left: -30px;
}
#humans .human.left .scribble span {
    left: -40px;
    text-align: right;
}
#humans .human.right {
    display: grid;
    justify-content: right;
    align-content: center;
}
#humans .human.right .scribble {
    right: -60px;
}
#humans .human.right .scribble span {
    right: -10px;
}
#humans .human .scribble {
    position: absolute;
    height: 50px;
    width: 50px;
    top: 0;
    transition: background 1s;
}
#humans .human .scribble span {
    position: absolute;
    display: grid;
    align-items: end;
    height: 100%;
}
#humans .human .scribble .head {
    width: 30%;
    height: 30%;
    background-color: #666;
    border-radius: 50%;
    margin: 2px auto;
    transition: background 1s;
    position: absolute;
    top: 30%;
    left: 5%;
}
#humans .human .scribble .body {
    position: absolute;
    bottom: 0;
    width: 40%;
    height: 20%;
    background-color: #666;
    border-radius: 50% 50% 0 0;
    margin: 0 auto;
    transition: background 1s;
}
.no_transition {
    transition: none !important;
}
.highlight {
    border: 2px solid #b51e23 !important;
    font-weight: bold;
}
.highlightText {
    font-weight: bold;
}
@media only screen and (max-width: 400px) {
    #content {
        position: relative;
        margin: 25px auto;
        width: 300px;
        height: 300px;
    }
    #content h3 {
        top: 10px;
        font-size: 1em;
    }
    #content #blood_selector {
        width: 150px;
        height: 75px;
        font-size: 0.75em;
        top: 45px;
    }
    #content .bar {
        top: 40px;
    }
    #content .main_bag {
        width: 75px;
        height: 105px;
        left: 125px;
    }
    #content .main_bag::before {
        top: -108px;
        height: 100px;
    }
    #content .main_bag .blood {
        height: 70%;
    }
    #content #center_via_c .center_via {
        left: 167px;
        top: 240px;
    }
    #content #humans {
        top: 240px;
        width: 180px;
        left: 85px;
    }
}
</style>
