<template>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/chimney_caps.webp" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Lets Talk About Chimney Caps</h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Chimney caps, which cover the top edge of your chimney (the chimney crown), are
                    one of the most important features of your chimney. They are also probably the most inexpensive
                    preventive measure that a homeowner can employ to prevent water penetration and damage to the
                    chimney.
                </p>
                <br>
                <p class="text-justify">Chimcare offers chimney sealing services to protect your chimney from harmful
                    moisture for up to 10 years, but you can also prevent a lot of other water damage to your chimney by
                    installing a simple chimney cap or chimney crown to cover it. The chimney cap’s second function –
                    and just as important – is to protect your chimney and home from the elements like wind and fire, as
                    well as keep birds, bats, squirrels and insects from nesting in your chimney.
                </p>
                <br>
                <p class="text-justify">At Chimcare, we provide only the highest quality chimney caps made with
                    stainless steel, copper and other durable materials, because we don’t believe our customers should
                    have to replace these components after only a year or two of use.
                </p>
                <br>
                <p class="text-justify">We offer a full array of chimney caps, from standard square/rectangle caps to
                    Wind Directional Chimney Caps. Some chimney covers also act as a spark arrestor, which can protect
                    your roof from escaping embers. And if we don’t have a chimney cap in stock that meets your needs,
                    we are happy to manufacture a custom chimney cap for you.
                </p>
            </div>
        </v-col>
    </v-row>

    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="12" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Benefits of a chimney cap</h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">&bull; Reduces the amount of rain and moisture that enters the chimney</p>
                <p class="text-justify">&bull; Restricts raccoons, birds and other animals from nesting in your
                    chimney</p>
                <p class="text-justify">&bull; Protects the chimney crown from the damaging moisture of ice and rain</p>
                <p class="text-justify">&bull; Keeps sparks escaping the chimney and landing on your roof or other
                    nearby combustibles</p>
                <br>
                <p>The chimney cover can also provide a nice aesthetic and curb appeal to the exterior of your home. The
                    roofline of your home is an important architectural feature that is often overlooked. An
                    embellishment like a copper chimney cap can add instant charm. In just a few months, Chimcare’s
                    copper chimney caps change color to a beautiful, green-brown antique patina, giving your house a
                    distinctive, old-world appearance. We can also custom build chimney caps to fit your architectural
                    style.

                    Do you need to cover your chimney cap or flue cover but can’t find the right ready-made cap in our
                    selection? We can fabricate any custom chimney cap to meet your unique needs, from stainless steel
                    or copper chimney caps, to round/square caps and even wind-directional chimney caps.</p>
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
            items: [
                {
                    src: '../images/gas_log_1.jpg',
                },
                {
                    src: '../images/gas_log_2.webp',
                },
                {
                    src: '../images/gas_log_3.jpg',
                },
                {
                    src: '../images/gas_log_4.jpg',
                },
            ],
            determine_size: [
                {
                    text: "Measure the front width of you fireplace"
                },
                {
                    text: "Measure the width at the back of your fireplace"
                },
                {
                    text: "Measure the depth from the front to the back of your fireplace"
                },
                {
                    text: "Measure the height from the top to bottom of the front your fireplace"
                },
                {
                    text: "Measure the height from the top to bottom of the back your fireplace"
                },
            ],
        }
    },
}
</script>

<style scoped>

</style>
