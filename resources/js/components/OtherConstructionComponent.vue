<template>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Experience the Excellence of Chimneyz Other Constructions Services</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">At Chimneyz, we understand the importance of a well-maintained chimney in your
                    home. Our commitment to excellence and attention to detail sets us apart, ensuring that your chimney
                    is not only functional but also safe and efficient. Our team of experienced professionals is
                    dedicated to delivering top-notch chimney cleaning and repair services, tailored to meet the unique
                    needs of your home.</p>
                <br>
                <p class="text-justify">Ready to experience the best in chimney care? Contact us today to schedule a
                    service or to learn more about how we can help you keep your chimney in top condition. Trust
                    Chimneyz for a cleaner, safer, and more efficient chimney.</p>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/chimney_service.png" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
    </v-row>
    <div class="px-md-6">
        <ScheduleNowComponent/>
    </div>

    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/sweep.png" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Join Our Family of Satisfied Customers</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Your trust is our top priority. Join the multitude of homeowners who rely on
                    Chimneyz for their chimney and fireplace needs. Experience the difference in quality,
                    professionalism, and care that we bring to every job.</p>
                <br>
                <p class="text-justify">Don’t wait for a chimney problem to arise. Be proactive in maintaining the heart
                    of your home. Contact Chimneyz today for a consultation or to schedule your next service. We’re here
                    to ensure that your chimney and fireplace are always a source of comfort and joy in your home.</p>
            </div>
        </v-col>
    </v-row>
    <br>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Why Choose Us?</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <br>
                <p class="text-justify">Here’s a look at Why Choose Us:</p>
                <v-list lines="lines">
                    <v-list-item class="text-justify"
                                 v-for="(item, index) in why_choose_us"
                                 :key="index"
                    >
                        &bull; <strong>{{ item.point }}</strong> : {{ item.text }}
                    </v-list-item>
                </v-list>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/sweep_2.png" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
    </v-row>
    <v-row class="pa-md-16">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/installation.png" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Advanced Services for Comprehensive Care</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <br>
                <p class="text-justify">Here’s a look at our gas fireplace installation options:</p>
                <v-list lines="lines" class="text-justify">
                    <v-list-item
                        v-for="(item, index) in why_choose_us"
                        :key="index"
                    >
                        &bull; <strong>{{ item.point }}</strong> : {{ item.text }}
                    </v-list-item>
                </v-list>
            </div>
        </v-col>
    </v-row>
    <v-row class="pa-md-16">
        <v-col md="12" cols="12">
            <h1 class="mb-5 text-center">Frequently Ask Question</h1>
            <v-divider class="mb-4 w-33" color="green"
                       style="border-top-width: 5px; opacity: 1; margin: 0 auto"></v-divider>
            <v-expansion-panels>
                <v-expansion-panel
                    v-for="(item, index) in faqs"
                    :key="index"
                    :title="(index+1)+'. '+item.question"
                    class="font-weight-bold"
                    :text="item.answer"
                ></v-expansion-panel>
            </v-expansion-panels>
        </v-col>
    </v-row>
</template>
<script>
import ScheduleNowComponent from "./ScheduleNowComponent.vue";

export default {
    name: "OtherConstructionComponent",
    components: {ScheduleNowComponent},

    data() {
        return {
            faqs: [
                {
                    question: "How often should I have my chimney cleaned?",
                    answer: "It's generally recommended to have your chimney cleaned at least once a year. However, if you use your fireplace frequently, more regular cleanings might be necessary to ensure safety and efficiency."
                },
                {
                    question: "What are the signs that my chimney needs repairing?",
                    answer: "Common signs include visible cracks in the masonry, water damage, a rusted damper or firebox, and spalling bricks. If you notice any of these signs, it's important to get a professional inspection as soon as possible."
                },
                {
                    question: "Can I use my fireplace if my chimney is damaged?",
                    answer: "It's not safe to use your fireplace if your chimney is damaged. Doing so can increase the risk of a chimney fire or carbon monoxide poisoning. We recommend scheduling a repair service before using your fireplace."
                },
                {
                    question: "What does a chimney cleaning service involve?",
                    answer: "Our chimney cleaning service includes removing soot and creosote from the chimney liner, firebox, smoke chamber, and damper. We also perform a visual inspection to check for any potential issues."
                },
                {
                    question: "How long does a chimney repair or cleaning take?",
                    answer: "Most chimney cleanings and minor repairs can be completed in one to two hours. More extensive repairs might take longer, and we can provide a time estimate after an initial inspection."
                },
            ],
            why_choose_us: [
                {
                    point: "Experienced Professionals",
                    text: "Our team is composed of knowledgeable and skilled experts, passionate about delivering the best service."
                }, {
                    point: "Customer-Centric Approach",
                    text: "Your satisfaction is our priority. We take the time to understand your needs and provide customized solutions."
                }, {
                    point: "Safety First",
                    text: "We adhere to strict safety standards, ensuring that every service is performed with utmost care and precision."
                }, {
                    point: "Eco-Friendly Practices",
                    text: "We are committed to using environmentally friendly methods and products in all our services."
                }, {
                    point: "Transparent Pricing",
                    text: "No hidden fees. We provide clear, upfront pricing, so you know what to expect."
                },
            ],
            advance_service: [
                {
                    point: "Chimney Relining",
                    text: "Protect your home from heat and potential hazards with our professional chimney relining services. We use the highest quality materials to ensure durability and safety."
                }, {
                    point: "Fireplace Makeovers",
                    text: "ransform your fireplace into a stunning focal point. Our team can renovate and upgrade your fireplace, enhancing both its aesthetics and efficiency."
                }, {
                    point: "Chimney Waterproofing",
                    text: "Protect your chimney from water damage, a common issue that can lead to costly repairs. Our waterproofing services provide an effective barrier against moisture, extending the lifespan of your chimney."
                }, {
                    point: "Custom Chimney Caps and Crowns",
                    text: "Enhance the functionality and appearance of your chimney with our custom caps and crowns, designed to keep out rain, debris, and critters."
                }, {
                    point: "Smoke Chamber Repair",
                    text: "Ensure the safety and efficiency of your fireplace with our smoke chamber repair services. A well-maintained smoke chamber is crucial for proper venting and fire prevention."
                },
            ],
        }
    }
}
</script>

<style scoped>

</style>
