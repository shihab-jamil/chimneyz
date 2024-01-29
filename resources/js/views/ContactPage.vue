<template>
    <v-img src="images/contact.png" class="mb-10" />
    <v-card class="ma-10 pa-md-10 pa-3" rounded="xl" elevation="12">
        <v-row class="flex-column align-center">
            <div class="text-h4 mb-2 text-center font-weight-bold">Contact Us</div>
            <v-divider class="mb-4 w-25" color="green" style="border-top-width: 5px; opacity: 1; height: 4px; border-radius: 10px"></v-divider>
        </v-row>

        <v-row>
            <v-col md="6" cols="12">
                <v-img src="images/contact-us-sales.png" rounded="xl" />
            </v-col>
            <v-col md="6" cols="12">
                <ContactComponent :visible-action-button="true" :contact="contactForm" @submit="submitContactForm" :loading="loading"/>
            </v-col>
        </v-row>
    </v-card>
</template>
<script>
import ContactComponent from "../components/ContactComponent.vue";
import axios from "axios";
export default {
    name: "ContactPage",
    components: {ContactComponent},
    data(){
        return{
            contactForm : {
                name : null,
                email : null,
                phoneNumber : null,
                address : null,
                message : null
            },
            loading : false
        }
    },
    methods : {
        submitContactForm(){
            this.loading = true;
            axios.post('/api/contact-us', this.contactForm).then(response => {
                if(response.data.success){
                    console.log(response)
                    // Display success message using toast
                    this.$toast.success("Form submitted successfully!", {
                        position: "top-right",
                        timeout: 5000,
                        closeOnClick: true,
                        pauseOnFocusLoss: true,
                        pauseOnHover: true,
                        draggable: true,
                        draggablePercent: 0.6,
                        showCloseButtonOnHover: false,
                        hideProgressBar: false,
                        closeButton: "button",
                        icon: true,
                        rtl: false
                    });
                    this.$router.push({ name: 'Home' });
                }
            }).catch(error => {
                console.log(error)
            }).finally(() => {
                this.loading = false
            })
        }
    }
}
</script>
<style scoped>

</style>
