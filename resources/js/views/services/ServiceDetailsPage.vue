<template>
    <v-card>
        <v-img
            src="../images/service_details.jpeg"
            class="d-flex align-center justify-center"
            gradient="to bottom, rgba(0,0,0,.2), rgba(0,0,0,.9)"
        >
            <v-card-title class="text-center text-h2 text-white font-weight-bold">About our Service</v-card-title>
        </v-img>
    </v-card>
    <component :is="generateComponent" />
</template>

<script>
import CleanerAndRepairComponent from "../../components/CleanerAndRepairComponent.vue";

export default {
    name: "ServiceDetails",
    components: {CleanerAndRepairComponent},
    props : ['type'],
    data(){
        return {
            serviceMap : {
                clean_repair : "CleanerAndRepairComponent",
                inspection : "InspectionComponent",
                sweep : "SweepComponent",
                repair : "RepairComponent",
                fireplace : "FireplaceComponent",
                fireplace_repair : "FireplaceRepairComponent",
                fireplace_chimney : "FireplaceChimneyComponent",
                stove : "StoveComponent",
                line_installation : "GasLineComponent",
                masonry : "ConstructionComponent",
                building : "BuildingComponent",
                construction : "ConstructionComponent",
            }
        }
    },
    computed : {
        generateComponent(){
            return  this.serviceMap[this.type]
        }
    }
}
</script>

<style scoped>

</style>
