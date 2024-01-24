<template>
    <v-layout>
        <v-footer
            class="bg-black text-center d-flex flex-column"
        >
            <v-row class="md-pa-12 pa-6 px-8 text-left">
                <v-col md="4" cols="12" >
                    <h2>Company</h2>
                    <hr class="w-25 bg-green mb-3" style="height: 3px; border:none">
                    <div class="pt-0">
                        184 Gulshan Avenue
                        Gulshan 2
                        Dhaka 1212
                        Email: ahc.dhaka@dfat.gov.auTelephone: +88 09604 260100
                    </div>
                </v-col>
                <v-col md="4" cols="12" class="md-pl-16">
                    <h2>Service Cities</h2>
                    <hr class="w-25 bg-green mb-3" style="height: 3px; border:none">
                    <ul class="ml-3">
                        <li class="mb-3" v-for="item in ['Dhaka', 'Australia']">{{ item }}</li>
                    </ul>
                </v-col>
                <v-col md="4" cols="12">
                    <h2 class="ml-3">Follow Us</h2>
                    <hr class="w-25 bg-green mb-3 ml-3" style="height: 3px; border:none">
                    <div>
                        <v-btn
                            v-for="icon in icons"
                            :key="icon"
                            :icon="icon.icon"
                            :href="icon.link"
                            target="_blank"
                            variant="text"
                        ></v-btn>
                    </div>
                </v-col>
            </v-row>
            <v-divider></v-divider>

            <div>
                <p>© Copyright 2010 - {{ new Date().getFullYear() }} - chimney</p>
            </div>
        </v-footer>
    </v-layout>
</template>

<script>
export default {
    name: "Footer",
    data(){
        return {
            icons: [
                {
                    icon : 'mdi-facebook',
                    link : 'https://www.facebook.com/profile.php?id=61555476044565'
                },
                {
                    icon : 'mdi-twitter',
                    link : 'https://twitter.com/chimneyzoffical'
                },
                {
                    icon : 'mdi-pinterest',
                    link : 'https://www.pinterest.com/usachimneyz/?actingBusinessId=1070731017565962468'
                },
                {
                    icon : 'mdi-instagram',
                    link : 'https://www.instagram.com/chimneyzoffical/'
                }
            ],
        }
    }
}
</script>

<style scoped>
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    ul li{
        list-style: none;
    }
</style>
