<template>
    <v-sheet elevation="12" class="md-mx-16 mx-10" rounded="lg" color="green-lighten-5">
        <v-form ref="scheduleForm" >
            <v-row class="pa-8 d-flex align-center">
                <v-col md="4" lg="3" cols="12">
                    <v-select
                        v-model="contactForm.location"
                        item-color="green"
                        label="Select Location"
                        :rules="[v => !!v || 'Location Can not be blank']"
                        :items="locations"
                        variant="outlined"
                        hide-details="auto"
                    ></v-select>
                </v-col>
                <v-col md="4" lg="3" cols="12">
                    <v-select
                        v-model="contactForm.service"
                        item-color="green"
                        label="Select Service"
                        :disabled="isSelectedService"
                        :rules="[v => !!v || 'Service Can not be blank']"
                        :items="services"
                        variant="outlined"
                        hide-details="auto"
                    ></v-select>
                </v-col>
                <v-col md="4" lg="3" cols="12">
                    <v-select
                        v-model="contactForm.quantity"
                        item-color="green"
                        label="Select Quantity"
                        :rules="[v => !!v || 'Quantity Can not be blank']"
                        :items="quantity"
                        variant="outlined"
                        hide-details="auto"
                    ></v-select>
                </v-col>
                <v-col md="12" lg="3" cols="12" class="d-flex align-center justify-center px-md-10 px-3">
                    <v-btn color="green" dark @click="submitForm" size="large" class="text-wrap">
                        Schedule Now
                        <v-fade-transition v-if="showCalculation" leave-absolute>
                             <span class="ml-1" :key="value">
                                 for
                                 <strong >{{value}}</strong>
                                 $
                            </span>
                        </v-fade-transition>
                    </v-btn>
                </v-col>
        </v-row>
        </v-form>
    </v-sheet>

    <v-dialog
        v-model="dialog"
        persistent
        width="600px"
    >
        <v-card>
            <v-card-title>
                Schedule now
            </v-card-title>
            <Contact
                :contact="contactForm"
                :visibleActionButton="false"
                :should-validate="validateContactForm"
                @submit="handleContactForm"
            />
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                    color="green-darken-1"
                    variant="text"
                    @click="dialog = false"
                >
                    Cancel
                </v-btn>
                <v-btn
                    color="green-darken-1"
                    variant="text"
                    :loading="validateContactForm"
                    @click="validateContactForm = true"
                >
                    Submit
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

</template>

<script>
import Contact from "./ContactComponent.vue";
import axios from "axios";

export default {
    name: "ScheduleNowComponent",
    components: {Contact},
    data(){
        return {
            dialog : false,
            locations : [
                {
                    value : null,
                    title : "Select Location"
                },
                {
                    value : "Oregon/WA",
                    title : "Oregon/WA"
                },
                {
                    value : "Seattle/Tacoma",
                    title : "Seattle/Tacoma"
                },
                {
                    value : "Ohio",
                    title : "Ohio"
                },
                {
                    value : "California",
                    title : "California"
                }
            ],
            services : [
                {
                    value : null,
                    title : "Select Service"
                },
                {
                    value : "Chimney Cleaner and Repair",
                    title : "Chimney Cleaner and Repair"
                },
                {
                    value : "Chimney Inspection",
                    title : "Chimney Inspection",
                    price : 69
                },
                {
                    value : "Chimney Sweep",
                    title : "Chimney Sweep"
                },
                {
                    value : "Chimney Sweep & Inspection",
                    title : "Chimney Sweep & Inspection",
                    price : 299
                },
                {
                    value : "Chimney Repair",
                    title : "Chimney Repair"
                },
                {
                    value : "Installing a Fireplace",
                    title : "Installing a Fireplace"
                },
                {
                    value : "Gas Fireplace Repair and Service",
                    title : "Gas Fireplace Repair and Service",
                    price : 49
                },
                {
                    value : "Gas Fireplace Cleaning",
                    title : "Gas Fireplace Cleaning",
                    price : 299
                },
                {
                    value : "Pellet Stove Service",
                    title : "Pellet Stove Service"
                },
                {
                    value : "Installing a Fireplace Chimney",
                    title : "Installing a Fireplace Chimney"
                },
                {
                    value : "Gas Line Installation Service",
                    title : "Gas Line Installation Service"
                },
                {
                    value : "Repair and Construction of Masonry",
                    title : "Repair and Construction of Masonry",
                    price : 49
                },
                {
                    value : "Outdoor Fireplace Building",
                    title : "Outdoor Fireplace Building",
                    price : 49
                },
                {
                    value : "Other Construction",
                    title : "Other Construction",
                    price : 49
                },
                {
                    value : "Other",
                    title : "Other"
                },


            ],
            quantity : [
                {
                    value : null,
                    title : "Select Quantity"
                },
                {
                    value : 1,
                    title : "1"
                },
                {
                    value : 2,
                    title : "2"
                },
                {
                    value : 3,
                    title : "3"
                },
                {
                    value : 4,
                    title : "4"
                },
                {
                    value : 5,
                    title : "5"
                },
                {
                    value : 6,
                    title : "6"
                },
                {
                    value : 7,
                    title : "7"
                },
                {
                    value : 8,
                    title : "8"
                },
                {
                    value : 9,
                    title : "9"
                },
                {
                    value : 10,
                    title : "10"
                },
                {
                    value : "Other",
                    title : "Other"
                }
            ],
            contactForm : {
                location : null,
                service : null,
                quantity : null
            },
            showCalculation : false,
            value : 0,
            servicesForCalculation : [
                'Chimney Inspection',
                'Chimney Sweep & Inspection',
                'Repair and Construction of Masonry',
                'Outdoor Fireplace Building',
                'Other Construction',
                'Gas Fireplace Repair and Service',
                'Gas Fireplace Cleaning'
            ],
            serviceMap : {
                clean_repair : "Chimney Cleaner and Repair",
                inspection : "Chimney Inspection",
                sweep : "Chimney Sweep",
                repair : "Chimney Repair",
                fireplace : "Installing a Fireplace",
                fireplace_repair : "Gas Fireplace Repair and Service",
                fireplace_chimney : "Gas Fireplace Cleaning",
                stove : "Pellet Stove Service",
                line_installation : "Gas Line Installation Service",
                masonry : "Repair and Construction of Masonry",
                building : "Outdoor Fireplace Building",
                construction : "Other Construction",
            },
            validateContactForm : false,
        }
    },
    watch : {
        contactForm : {
            deep : true,
            handler(newVal){
                if(newVal.service === 'Other' || newVal.quantity === 'Other'){
                    this.$router.push({name : "Contact"})
                }
                if(newVal.location === 'Seattle/Tacoma' && this.servicesForCalculation.includes(newVal.service) && newVal.quantity){
                    this.value = (this.services.find(item => item.value === newVal.service)).price * newVal.quantity
                    this.showCalculation = true
                }else{
                    this.value = 0
                    this.showCalculation = false
                }
            }
        }
    },
    computed : {
      isSelectedService(){
        if(this.$route.params?.type){
            return !!this.serviceMap[this.$route.params.type]
        }
      }
    },
    methods: {
        async submitForm(){
            const { valid } = await this.$refs.scheduleForm.validate()

            if (valid){
                this.dialog = true
            }
        },
        handleContactForm(value){
            if(!value){
                this.validateContactForm = false
                return
            }
            axios.post('/api/make-schedule', this.contactForm)
                .then(response => {
                    if(response.data.success) {
                        this.$toast.success("Schedule has been created")
                    }else{
                        this.$toast.error("Something went wrong")
                    }
                }).catch(error => {
                    console.log(error)
            }).finally(() => {
                this.validateContactForm = false
                this.dialog = false
            })


        }
    },
    mounted() {
        if(this.isSelectedService){
            this.contactForm.service = this.serviceMap[this.$route.params.type]
        }
    }
}
</script>

<style scoped>

</style>
