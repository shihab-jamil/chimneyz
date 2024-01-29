<template>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/gas_log.jpg" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>What options do you have for a Gas Log Set?</h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Gas log sets are becoming much more popular as consumers are moving away from
                    wood. Wood can be an inconvenience as you have to source the wood, which now days have become
                    expensive. In addition to the cost you have to properly store the wood and chop it.</p>
                <br>
            </div>
        </v-col>
    </v-row>

    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Which Gas Log Sets should I install, Vented or Ventless?</h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Gas log sets are becoming much more popular as consumers are moving away from
                    wood. Wood can be an inconvenience as you have to source the wood, which now days have become
                    expensive. In addition to the cost you have to properly store the wood and chop it.
                </p>
                <br>
                <p>Vented Gas Log Sets are meant to be installed into a full functioning masonry fireplace where
                    Ventless Gas Log sets do not require a chimney to vent. They do however require a masonry fireplace
                    to be put into. These Vented Gas Log Sets produce tall, golden flames and offer a very realistic
                    fire and an awesome ambiance to enjoy. Vented offers a more realistic fire and experience for the
                    home owner.

                    Ventless Gas Log Sets are designed to achieve a clean, smokeless flame, so they don’t require the
                    use of a chimney flue and can be used with your fireplace damper closed. Since they don’t require a
                    chimney 100% of the heat that is produced will radiant back into the room instead of escaping up
                    your chimney flue. Ventless Gas Log Sets offers an efficient secondary source of heat for the
                    home.</p>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-carousel
                hide-delimiter-background
                show-arrows="hover"
                cycle
                height="400"
            >
                <v-carousel-item
                    v-for="(item,i) in items"
                    :key="i"
                    :src="item.src"
                    cover
                ></v-carousel-item>
            </v-carousel>
        </v-col>
    </v-row>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="12" cols="12">
            <div class="flex flex-column pa-10">
                <h1>What type of maintenance is required for a Gas Log Set?
                </h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Gas log sets require minimal maintenance. However, its a good idea to they
                    inspected by a license professional. If you have the Vented Gas Log Sets you’ll want to have your
                    chimney inspected annually for safety of the system.</p>
                <br>
            </div>
        </v-col>
    </v-row>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/detarmine_gas_log.jpg" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Determine the Size of Your Gas Logs
                </h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">To get the perfect look, it’s important to choose the size log set that best
                    fits in your fireplace.This simple measuring process will help you choose the right size.</p>
                <br>
                <p>
                    To determine the appropriate size of gas logs for your fireplace, start by measuring the width,
                    depth, and height of your fireplace opening. These measurements will help you understand the
                    available space. Additionally, consult the manufacturer's guidelines and local building codes to
                    ensure you meet clearance requirements for safety. Take into consideration the size of the gas
                    burner in your fireplace when selecting gas logs, as compatibility is key. It's essential to choose
                    gas logs that appear realistic and proportionate to your fireplace to create an aesthetically
                    pleasing effect. Review the product specifications provided by the gas log manufacturer, as they
                    often include recommendations for fireplace size and clearances. Lastly, if you're uncertain or need
                    assistance with installation, seek guidance from a professional fireplace installer or technician to
                    ensure a safe and enjoyable fireplace experience.
                </p>
            </div>
        </v-col>
    </v-row>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Follow these simple steps:</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <br>
                <p class="text-justify">Take a Look Here : </p>
                <v-list lines="one" class="text-justify">
                    <v-list-item
                        v-for="(item, index) in determine_size"
                        :key="index"
                    >
                        {{ index + 1 }}. {{ item.text }}
                    </v-list-item>
                </v-list>
                <p><strong>These required widths allow for centering of the unit:</strong></p>
                <p>* Add 4″ to the front and rear widths when adding a safety pilot valve.</p>
                <p>* Add 6″ to the front and rear widths when adding any other valve.</p>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/gas_log_table.png" :aspect-ratio="9/5" rounded="xl"/>
        </v-col>
    </v-row>
    <v-row class="pa-md-16 my-md-0 my-10">
        <v-col md="12" cols="12">
            <div class="flex flex-column pa-10 text-center">
                <h1>Follow these simple steps:</h1>
                <v-divider class="mb-4 w-100" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
            </div>
            <div class="flex flex-column px-10">
                <h3>Match Light</h3>
                <p>This option is for natural gas only and is not available for LP. This system must be lit with a match
                    or lighter. You control the flame height using a key valve.</p>
                <br>
                <h3>Manual Safety Pilot</h3>
                <p>This system has a safety pilot that is manually lighted and stays lit all the time. This can also be
                    called a standing pilot, it is similar to what you see in a water heater. This can be turned on and
                    off by reaching inside your fireplace and turning the control knob.</p>
                <br>
                <h3>Remote Control</h3>
                <p>Remote control systems include a remote pilot valve assembly. This allows you to turn on your
                    fireplace log set and controls a variable flame height.</p>
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
