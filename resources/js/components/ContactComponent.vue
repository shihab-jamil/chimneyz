<template>
    <v-row class="pa-8 d-flex align-center">
        <v-form ref="form" class="v-col-12">
            <v-text-field
                v-model="contact.name"
                rules="required"
                label="Enter your name"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="contact.email"
                rules="required"
                label="Enter your email"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="contact.phoneNumber"
                rules="required"
                label="Enter your phone number"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="contact.address"
                rules="required"
                label="Enter your address"
                variant="outlined"
            ></v-text-field>
            <v-textarea
                v-model="contact.message"
                rules="required"
                variant="outlined"
                auto-grow
                label="Enter your message here"
                rows="4"
                row-height="30"
                shaped
            ></v-textarea>
            <v-row v-if="visibleActionButton" class="justify-end px-5">
                <v-btn type="submit" color="green" class="mt-2" :loading="loading" @click="submitForm">Submit</v-btn>
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
        }
    },
    methods : {
        async submitForm(){
            const { valid } = await this.$refs.form.validate()

            if (valid){
                this.$emit("submit")
            }
        },
    }
}
</script>
<style scoped>

</style>
