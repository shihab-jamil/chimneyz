<template>
    <v-row class="pa-8 d-flex align-center">
        <v-col cols="12" class="text-end">
            <v-text-field
                v-model="firstName"
                :rules="rules"
                label="Enter your name"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="firstName"
                :rules="rules"
                label="Enter your email"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="firstName"
                :rules="rules"
                label="Enter your phone number"
                variant="outlined"
            ></v-text-field>
            <v-text-field
                v-model="firstName"
                :rules="rules"
                label="Enter your address"
                variant="outlined"
            ></v-text-field>
            <v-textarea
                variant="outlined"
                auto-grow
                label="Enter your message here"
                rows="4"
                row-height="30"
                shaped
            ></v-textarea>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name: "Contact"
}
</script>
<style scoped>

</style>
