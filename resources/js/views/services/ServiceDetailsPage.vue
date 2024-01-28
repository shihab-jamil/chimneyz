<template>
    <v-card>
        <v-img
            src="../images/ChineyBanner2.jpg"
            class="d-flex align-center justify-center"
            gradient="to bottom, rgba(0,0,0,.2), rgba(0,0,0,.9)"
        >
            <v-card-title class="text-center text-h2 text-white font-weight-bold">About our Service</v-card-title>
        </v-img>
    </v-card>
    <v-row class="pa-md-16">
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Chimney Repointing & Mortar Joint Repair In MD, VA, & DC</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae eligendi
                    error est expedita harum id illo ipsa laborum nam praesentium provident, quasi sint? Amet aspernatur
                    aut beatae eaque excepturi itaque iusto sunt. Culpa, dicta doloremque ea esse laborum molestiae
                    neque sequi sit. Beatae fuga ipsa maxime nulla quasi voluptatem.</p>
                <br>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto
                    autem, debitis fugiat molestiae similique veniam! Deleniti molestias numquam pariatur placeat quasi
                    tempora tenetur? Ab amet aut blanditiis cupiditate debitis dignissimos distinctio eveniet incidunt
                    modi molestiae, nisi numquam provident quam quia repellendus repudiandae similique soluta tenetur
                    velit vero voluptatibus.</p>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/contact-us-sales.png" :aspect-ratio="9/4" rounded="xl"/>
        </v-col>
    </v-row>
    <div class="px-6">
        <ScheduleNowComponent/>
    </div>

    <v-row class="pa-md-16">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/contact-us-sales.png" :aspect-ratio="9/4" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Chimney Repointing & Mortar Joint Repair In MD, VA, & DC</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae eligendi
                    error est expedita harum id illo ipsa laborum nam praesentium provident, quasi sint? Amet aspernatur
                    aut beatae eaque excepturi itaque iusto sunt. Culpa, dicta doloremque ea esse laborum molestiae
                    neque sequi sit. Beatae fuga ipsa maxime nulla quasi voluptatem.</p>
                <br>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto
                    autem, debitis fugiat molestiae similique veniam! Deleniti molestias numquam pariatur placeat quasi
                    tempora tenetur? Ab amet aut blanditiis cupiditate debitis dignissimos distinctio eveniet incidunt
                    modi molestiae, nisi numquam provident quam quia repellendus repudiandae similique soluta tenetur
                    velit vero voluptatibus.</p>
            </div>
        </v-col>
    </v-row>
    <br>
    <v-row class="pa-md-16">
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Gas Fireplace Installations</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae eligendi
                    error est expedita harum id illo ipsa laborum nam praesentium provident, quasi sint? Amet aspernatur
                    aut beatae eaque excepturi itaque iusto sunt. Culpa, dicta doloremque ea esse laborum molestiae
                    neque sequi sit. Beatae fuga ipsa maxime nulla quasi voluptatem.</p>
                <br>
                <p class="text-justify">Here’s a look at our gas fireplace installation options:</p>
                <v-list lines="two">
                    <v-list-item
                        v-for="n in 3"
                        :key="n"
                    >
                        <v-list-item-content>
                            &bull; <strong>{{ 'Item ' + n }}</strong> : Lorem ipsum dolor sit amet consectetur
                            adipisicing elit
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/contact-us-sales.png" :aspect-ratio="9/4" rounded="xl"/>
        </v-col>
    </v-row>
    <v-row class="pa-md-16">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/contact-us-sales.png" :aspect-ratio="9/4" rounded="xl"/>
        </v-col>
        <v-col md="6" cols="12">
            <div class="flex flex-column pa-10">
                <h1>Gas Fireplace Installations</h1>
                <v-divider class="mb-4 w-75" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae eligendi
                    error est expedita harum id illo ipsa laborum nam praesentium provident, quasi sint? Amet aspernatur
                    aut beatae eaque excepturi itaque iusto sunt. Culpa, dicta doloremque ea esse laborum molestiae
                    neque sequi sit. Beatae fuga ipsa maxime nulla quasi voluptatem.</p>
                <br>
                <p class="text-justify">Here’s a look at our gas fireplace installation options:</p>
                <v-list lines="two">
                    <v-list-item
                        v-for="n in 3"
                        :key="n"
                    >
                        <v-list-item-content>
                            &bull; <strong>{{ 'Item ' + n }}</strong> : Lorem ipsum dolor sit amet consectetur
                            adipisicing elit
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
            </div>
        </v-col>
    </v-row>
    <v-row class="pa-md-16">
        <v-col md="12" cols="12">
            <h1 class="mb-5 text-center">Frequently Ask Question</h1>
            <v-divider class="mb-4" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
            <v-expansion-panels>
                <v-expansion-panel
                    v-for="i in 3"
                    :key="i"
                    title="Item"
                    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                ></v-expansion-panel>
            </v-expansion-panels>
        </v-col>
    </v-row>
</template>

<script>
import ScheduleNowComponent from "../../components/ScheduleNowComponent.vue";

export default {
    name: "ServiceDetails",
    components: {ScheduleNowComponent}
}
</script>

<style scoped>

</style>
