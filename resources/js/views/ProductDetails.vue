<template>
    <component :is="generateComponent" />
</template>

<script>
import ChimneyCapsComponent from "../components/ChimneyCapsComponent.vue";
import GasLogComponent from "../components/GasLogComponent.vue";
import GasFireplaceInsertComponent from "../components/GasFireplaceInsertComponent.vue";
import RepairComponent from "../components/RepairComponent.vue";
import WoodBurningFireplaceInsertComponent from "../components/WoodBurningFireplaceInsertComponent.vue";
export default {
    name: "ProductDetails",
    components : {
        ChimneyCapsComponent,
        GasLogComponent,
        GasFireplaceInsertComponent,
        RepairComponent,
        WoodBurningFireplaceInsertComponent
    },
    props : ['type'],
    data(){
        return {
            productMap : {
                caps : "ChimneyCapsComponent",
                log : "GasLogComponent",
                fireplace : "GasFireplaceInsertComponent",
                liners : "LinerComponent",
                wood : "WoodBurningFireplaceInsertComponent",
            }
        }
    },
    computed : {
        generateComponent(){
            return  this.productMap[this.type]
        }
    },
}
</script>

<style scoped>

</style>
