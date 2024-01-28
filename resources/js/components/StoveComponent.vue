<template>
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
            <v-img src="../images/chimney_service.png" :aspect-ratio="9/4" rounded="xl"/>
        </v-col>
    </v-row>
    <div class="px-6">
        <ScheduleNowComponent/>
    </div>

    <v-row class="pa-md-16">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/sweep.png" :aspect-ratio="9/4" rounded="xl"/>
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
                <v-list lines="lines">
                    <v-list-item
                        v-for="n in 3"
                        :key="n"
                    >
                        &bull; <strong>{{ 'Item ' + n }}</strong> : Lorem ipsum dolor sit amet consectetur
                        adipisicing elit
                    </v-list-item>
                </v-list>
            </div>
        </v-col>
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/sweep_2.png" :aspect-ratio="9/4" rounded="xl"/>
        </v-col>
    </v-row>
    <v-row class="pa-md-16">
        <v-col md="6" cols="12" class="d-flex justify-end align-center">
            <v-img src="../images/installation.png" :aspect-ratio="9/4" rounded="xl"/>
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
                <v-list lines="lines">
                    <v-list-item
                        v-for="n in 3"
                        :key="n"
                    >
                        &bull; <strong>{{ 'Item ' + n }}</strong> : Lorem ipsum dolor sit amet consectetur
                        adipisicing elit
                    </v-list-item>
                </v-list>
            </div>
        </v-col>
    </v-row>
    <v-row class="pa-md-16">
        <v-col md="12" cols="12">
            <h1 class="mb-5 text-center">Frequently Ask Question</h1>
            <v-divider class="mb-4 w-33" color="green" style="border-top-width: 5px; opacity: 1; margin: 0 auto"></v-divider>
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
    name: "StoveComponent",
    components: {ScheduleNowComponent},

    data() {
        return {
            faqs: [
                {
                    question: "Question One",
                    answer: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                },
                {
                    question: "Question Two",
                    answer: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                },
                {
                    question: "Question three",
                    answer: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                },
            ]
        }
    }
}
</script>

<style scoped>

</style>
