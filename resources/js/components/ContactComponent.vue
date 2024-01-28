<template>
    <v-row class="pa-md-4 d-flex align-center" :class="{'pa-md-8' : !visibleActionButton}">
        <v-form ref="form" class="v-col-12">
            <v-text-field
                v-model="contact.name"
                :rules="[v => !!v || 'Name Can not be blank']"
                label="Enter your name"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="contact.email"
                :rules="[v => !!v || 'A valid email is required']"
                label="Enter your email"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="contact.phoneNumber"
                :rules="[v => !!v || 'phone number can not be blank']"
                label="Enter your phone number"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="contact.address"
                :rules="[v => !!v || 'address can not be blank']"
                label="Enter your address"
                variant="outlined"
            ></v-text-field>
            <v-textarea
                v-model="contact.message"
                :rules="[v => !!v || 'message can not be blank']"
                variant="outlined"
                auto-grow
                label="Enter your message here"
                rows="4"
                row-height="30"
                shaped
            ></v-textarea>
            <v-row v-if="visibleActionButton" class="justify-end px-3 my-3">
                <v-btn color="green" class="mt-2" :loading="loading" @click="submitForm">Submit</v-btn>
            </v-row>
        </v-form>
    </v-row>
</template>

<script>
export default {
    name: "ContactComponent",
    props : {
        contact : {
            type : Object,
            required : true
        },
        visibleActionButton : {
            type : Boolean,
            required : true
        },
        loading : {
            type : Boolean,
            required : false
        },
        shouldValidate:{
            type:Boolean,
            required : false,
        },
    },
    data(){
      return {
          validations : {}
      }
    },
    watch : {
        shouldValidate : {
            handler(newVal){
                if(newVal){
                    this.submitForm()
                }
            }
        }
    },
    methods : {
        async submitForm(){
            const { valid } = await this.$refs.form.validate()

            if (valid){
                this.$emit("submit", true)
            }else{
                this.$emit("submit", false)
            }
        },
    }
}
</script>
<style scoped>

</style>
