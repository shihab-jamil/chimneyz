<template>
    <v-card>
        <v-img
            src="../images/service_details.jpeg"
            class="d-flex align-center justify-center"
            gradient="to bottom, rgba(0,0,0,.2), rgba(0,0,0,.9)"
        >
            <v-card-title class="text-center text-md-h2 text-h4 text-white font-weight-bold">About our Service</v-card-title>
        </v-img>
    </v-card>
    <component :is="generateComponent" />
</template>

<script>
import CleanerAndRepairComponent from "../../components/CleanerAndRepairComponent.vue";
import ConstructionComponent from "../../components/ConstructionComponent.vue";
import InspectionComponent from "../../components/InspectionComponent.vue";
import SweepComponent from "../../components/SweepComponent.vue";
import RepairComponent from "../../components/RepairComponent.vue";
import FireplaceComponent from "../../components/FireplaceComponent.vue";
import FireplaceRepairComponent from "../../components/FireplaceRepairComponent.vue";
import FireplaceChimneyComponent from "../../components/FireplaceChimneyComponent.vue";
import StoveComponent from "../../components/StoveComponent.vue";
import GasLineComponent from "../../components/GasLineComponent.vue";
import BuildingComponent from "../../components/BuildingComponent.vue";
import OtherConstructionComponent from "../../components/OtherConstructionComponent.vue";

export default {
    name: "ServiceDetails",
    components: {
        CleanerAndRepairComponent,
        ConstructionComponent,
        InspectionComponent,
        SweepComponent,
        RepairComponent,
        FireplaceComponent,
        FireplaceRepairComponent,
        FireplaceChimneyComponent,
        StoveComponent,
        GasLineComponent,
        BuildingComponent,
        OtherConstructionComponent,
    },
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
                stove : "StoveComponent",
                fireplace_chimney : "FireplaceChimneyComponent",
                line_installation : "GasLineComponent",
                masonry : "ConstructionComponent",
                building : "BuildingComponent",
                construction : "OtherConstructionComponent",
            }
        }
    },
    computed : {
        generateComponent(){
            return  this.serviceMap[this.type]
        }
    },
}
</script>

<style scoped>

</style>
