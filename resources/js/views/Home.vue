<template>
    <v-img src="images/ChineyBanner2.jpg" class="mb-10"/>

    <ScheduleNowComponent/>

    <v-sheet class="md-mx-16 mx-10 my-16" rounded="lg">
        <div class="d-flex flex-column align-center mb-10">
            <h2 class="text-center">Our Services</h2>
            <hr class="w-25 bg-green mb-3 ml-3 " style="height: 4px; border:none">
        </div>
        <v-row>
            <v-col
                lg="3"
                md="4"
                cols="12"
                v-for="item in serviceCards"
            >
                <v-card
                    class="mx-auto px-4 pt d-flex flex-column align-center"
                    elevation="12"
                    rounded="xl"
                >
                    <v-img
                        class="text-center text-white"
                        width="300"
                        :src="item.image"
                        cover
                    >
                    </v-img>

                    <v-card-title class="pt-4 font-weight-bold">
                        {{ item.title }}
                    </v-card-title>

                    <v-card-actions>
                        <v-btn
                            color="green"
                            class="font-weight-bold"
                            variant="text"
                            @click="item.show = !item.show"
                        >
                            Explore
                        </v-btn>

                        <v-spacer></v-spacer>

                        <v-btn
                            :icon="item.show ? 'mdi-chevron-up' : 'mdi-chevron-down'"
                            @click="item.show = !item.show"
                        ></v-btn>
                    </v-card-actions>

                    <v-expand-transition>
                        <div v-show="item.show">
                            <v-divider></v-divider>

                            <v-card-text>
                                {{ item.description }}
                            </v-card-text>
                        </div>
                    </v-expand-transition>
                </v-card>
            </v-col>
        </v-row>
    </v-sheet>


</template>

<script>
import Contact from "../components/ContactComponent.vue";
import ScheduleNowComponent from "../components/ScheduleNowComponent.vue";

export default {
    name: "Home",
    components: {ScheduleNowComponent, Contact},
    data() {
        return {
            dialog: false,
            locations: [
                {
                    value: null,
                    title: "Select Location"
                },
                {
                    value: "Oregon/WA",
                    title: "Oregon/WA"
                },
                {
                    value: "Seattle/Tacoma",
                    title: "Seattle/Tacoma"
                },
                {
                    value: "Ohio",
                    title: "Ohio"
                },
                {
                    value: "California",
                    title: "California"
                }
            ],
            services: [
                {
                    value: null,
                    title: "Select Service"
                },
                {
                    value: "Open Fireplace",
                    title: "Open Fireplace"
                },
                {
                    value: "Wood Stove Insert with Liner",
                    title: "Wood Stove Insert with Liner"
                },
                {
                    value: "Wood Stove Insert without Liner",
                    title: "Wood Stove Insert without Liner"
                },
                {
                    value: "Gas Fireplace Service",
                    title: "Gas Fireplace Service"
                },
                {
                    value: "Free Standing Wood Stove",
                    title: "Free Standing Wood Stove"
                },
                {
                    value: "Pellet Stove Insert",
                    title: "Pellet Stove Insert"
                },
            ],
            quantity: [
                {
                    value: null,
                    title: "Select Quantity"
                },
                {
                    value: 1,
                    title: "1"
                },
                {
                    value: 2,
                    title: "2"
                },
                {
                    value: 3,
                    title: "3"
                },
                {
                    value: 4,
                    title: "4"
                },
                {
                    value: 5,
                    title: "5"
                },
                {
                    value: 6,
                    title: "6"
                }
            ],
            serviceCards: [
                {
                    id: 1,
                    title: 'Chimney Construction',
                    show: false,
                    image: "/images/service7.png",
                    description: 'At Chimneyz, we recognize that chimney construction is a complex art that goes beyond merely creating a structure with the right proportions on top of your house. It involves a deep understanding of airflow dynamics to ensure the efficient and safe removal of smoke and heat. Our expert team at Chimneyz is proficient in constructing chimneys that are not only architecturally sound but also functionally effective. We understand that in many homes, a single chimney might be responsible for venting smoke through a flue from multiple fireplaces across different areas of the house. This requires precise planning and execution to ensure optimal performance and safety.'
                },
                {
                    id: 2,
                    title: 'Fireplace construction Services',
                    show: false,
                    image: "/images/fireplace_construction.png",
                    description: 'At Chimneyz, we offer more than just basic chimney sweeping. Established with a commitment to excellence, our company has been setting standards in fireplace inspection and care since its inception. Our unique approach sets us apart – we treat each fireplace as if it were our own, starting every service with a comprehensive visual and physical examination.'
                },
                {
                    id: 3,
                    title: 'Fireplace Inspection Services',
                    show: false,
                    image: "/images/service1.png",
                    description: 'At Chimneyz, we offer more than just basic chimney sweeping. Established with a commitment to excellence, our company has been setting standards in fireplace inspection and care since its inception. Our unique approach sets us apart – we treat each fireplace as if it were our own, starting every service with a comprehensive visual and physical examination.'
                },
                {
                    id: 4,
                    title: 'Chimeny Sweep',
                    show: false,
                    image: "/images/service6.png",
                    description: 'With our professional chimney sweep services, you can rest assured that your home remains safe and free from unwanted odors. Are you experiencing a persistent smoky smell without a fire, or a foul odor emanating from your fireplace? These signs might indicate a creosote buildup, a common soot byproduct from wood burning. Creosote formation is an inevitable result of using a fireplace. However, over time, this soot accumulation can lead to serious issues such as reduced airflow, impaired chimney and fireplace performance, and heightened risks of fire and carbon monoxide poisoning.'
                },
                {
                    id: 5,
                    title: 'Dryer Vent Cleaning',
                    show: false,
                    image: "/images/service5.png",
                    description: 'In addition to our expertise in chimneys, Chimneyz is proud to offer top-notch dryer vent cleaning services. Maintaining your dryer vent is crucial for the safety and efficiency of your home, just like caring for your chimney. Over time, dryer vents can become clogged with lint, dust, hair, and other particles. This lint accumulation not only restricts airflow to the dryer but also backs up heat exhaust, posing a significant fire hazard. When a dryer\'s venting system is compromised, the appliance must work harder to dry clothes, leading to increased heat and the potential for the lint clogging the vent to ignite.'
                },
                {
                    id: 6,
                    title: 'Chimney Repair Services',
                    show: false,
                    image: "/images/service4.png",
                    description: 'At Chimneyz, our expert team specializes in all aspects of chimney repair, offering unparalleled service and expertise to our community. With years of experience under our belt, we\'re committed to delivering top-quality solutions to every customer. From minor repairs to major restorations, our skilled professionals have the know-how to address any chimney issue with precision and care. Trust us to ensure your chimney is not only functioning perfectly but also safe for your home. Contact Chimneyz today to schedule your appointment and experience the difference with our seasoned team of chimney experts.'
                },
                {
                    id: 7,
                    title: 'Chimney Flashing Repair',
                    show: false,
                    image: "/images/service3.png",
                    description: 'Experiencing water stains on your walls or ceiling around the chimney during rainy seasons? Chimneyz understands that the joint between your roof and chimney is a critical area prone to water seepage, particularly in the Pacific Northwest\'s challenging climate with frequent freeze/thaw cycles. Our specialized chimney flashing repair services at Chimneyz are designed to effectively seal your home against moisture, specifically targeting one of its most vulnerable points - the chimney flashing. Chimney flashing plays a pivotal role in creating a barrier resistant to the expansion and contraction caused by moisture exposure. If your flashing is compromised, it increases the risk of wood rot, mold growth, and expensive structural damage to your home.'
                },
                {
                    id: 8,
                    title: 'Masorny Repair & Construction',
                    show: false,
                    image: "/images/service4.png",
                    description: 'At Chimneyz, we understand that structurally sound masonry is the backbone of a healthy chimney. With years of experience in chimney cleaning and maintenance, we have honed our expertise in masonry repair and construction, catering to a variety of needs for both residential and commercial properties. Our clients trust us not only for our exceptional chimney services but also for our artisan-level skills in custom brick and stone projects. Whether enhancing the aesthetic of your home or reinforcing the structural integrity of your commercial property, Chimneyz is your go-to expert.'
                },
            ],
            show: false,
        }
    }
}
</script>

<style scoped>
/* Add hover effect to cards */
.v-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.v-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

/* Enhance the typography of card titles */
.v-card-title {
    font-size: 18px;
    color: #333; /* Adjust this color to match your branding */
}

/* Style the 'Explore' button */
.v-btn {
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.v-btn:hover {
    background-color: rgba(0, 128, 0, 0.1); /* Adjust hover color to match branding */
}

/* Adjust divider styles */
.v-divider {
    background-color: #4CAF50; /* Replace with your brand's accent color */
    margin: 4px 0;
}

</style>

