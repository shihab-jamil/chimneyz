<template>
    <v-row class="pa-md-16">
        <v-col md="12" cols="12">
            <h1 class="mb-5 text-center">Frequently Ask Question</h1>
            <v-divider class="mb-4 w-md-33" color="green"
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
export default {
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
        }
    },
}
</script>

<style scoped>

</style>
