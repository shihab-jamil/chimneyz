<template>
  <div class="container">
    <div class="services">
      <div class="service" v-for="service in services" :key="service.id">
        <h3>{{ service.title }}</h3>
        <p>{{ service.description }}</p>
        <button class="book-now-btn">Book Now</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Services',
  data() {
    return {
      services: [
        {
          id: 1,
          title: 'Chimney Construction',
          description: 'At Chimneyz, we recognize that chimney construction is a complex art that goes beyond merely creating a structure with the right proportions on top of your house. It involves a deep understanding of airflow dynamics to ensure the efficient and safe removal of smoke and heat. Our expert team at Chimneyz is proficient in constructing chimneys that are not only architecturally sound but also functionally effective. We understand that in many homes, a single chimney might be responsible for venting smoke through a flue from multiple fireplaces across different areas of the house. This requires precise planning and execution to ensure optimal performance and safety.'
        },
        {
          id: 2,
          title: 'Fireplace Inspection Services',
          description: 'At Chimneyz, we offer more than just basic chimney sweeping. Established with a commitment to excellence, our company has been setting standards in fireplace inspection and care since its inception. Our unique approach sets us apart – we treat each fireplace as if it were our own, starting every service with a comprehensive visual and physical examination.'
        },
        {
          id: 3,
          title: 'Chimeny Sweep',
          description: 'With our professional chimney sweep services, you can rest assured that your home remains safe and free from unwanted odors. Are you experiencing a persistent smoky smell without a fire, or a foul odor emanating from your fireplace? These signs might indicate a creosote buildup, a common soot byproduct from wood burning. Creosote formation is an inevitable result of using a fireplace. However, over time, this soot accumulation can lead to serious issues such as reduced airflow, impaired chimney and fireplace performance, and heightened risks of fire and carbon monoxide poisoning.'
        },
        {
          id: 4,
          title: 'Dryer Vent Cleaning',
          description: 'In addition to our expertise in chimneys, Chimneyz is proud to offer top-notch dryer vent cleaning services. Maintaining your dryer vent is crucial for the safety and efficiency of your home, just like caring for your chimney. Over time, dryer vents can become clogged with lint, dust, hair, and other particles. This lint accumulation not only restricts airflow to the dryer but also backs up heat exhaust, posing a significant fire hazard. When a dryer\'s venting system is compromised, the appliance must work harder to dry clothes, leading to increased heat and the potential for the lint clogging the vent to ignite.'
        },
        {
          id: 5,
          title: 'Chimney Repair Services',
          description: 'At Chimneyz, our expert team specializes in all aspects of chimney repair, offering unparalleled service and expertise to our community. With years of experience under our belt, we\'re committed to delivering top-quality solutions to every customer. From minor repairs to major restorations, our skilled professionals have the know-how to address any chimney issue with precision and care. Trust us to ensure your chimney is not only functioning perfectly but also safe for your home. Contact Chimneyz today to schedule your appointment and experience the difference with our seasoned team of chimney experts.'
        },
        {
          id: 6,
          title: 'Chimney Flashing Repair',
          description: 'Experiencing water stains on your walls or ceiling around the chimney during rainy seasons? Chimneyz understands that the joint between your roof and chimney is a critical area prone to water seepage, particularly in the Pacific Northwest\'s challenging climate with frequent freeze/thaw cycles. Our specialized chimney flashing repair services at Chimneyz are designed to effectively seal your home against moisture, specifically targeting one of its most vulnerable points - the chimney flashing. Chimney flashing plays a pivotal role in creating a barrier resistant to the expansion and contraction caused by moisture exposure. If your flashing is compromised, it increases the risk of wood rot, mold growth, and expensive structural damage to your home.'
        },
        {
          id: 7,
          title: 'Masorny Repair & Construction',
          description: 'At Chimneyz, we understand that structurally sound masonry is the backbone of a healthy chimney. With years of experience in chimney cleaning and maintenance, we have honed our expertise in masonry repair and construction, catering to a variety of needs for both residential and commercial properties. Our clients trust us not only for our exceptional chimney services but also for our artisan-level skills in custom brick and stone projects. Whether enhancing the aesthetic of your home or reinforcing the structural integrity of your commercial property, Chimneyz is your go-to expert.'
        },
      ]
    };
  }
};
</script>

<style scoped>
.container {
  padding: 20px;
  margin: auto;
  height: auto;
  max-width: 1200px; /* Adjust as needed */
  width: 100%;
  background-color: #f8f8f8; /* Container background color */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Container shadow */
}

.services {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  height: auto;
}

.service {
  flex-basis: calc(33.333% - 40px);
  margin: 5px;
  padding: 15px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  text-align: center;
  border-radius: 8px;
  height: auto;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  font-family: Arial, sans-serif;
}

.service h3 {
  margin-top: 5px;
  margin-bottom: 15px;
  color: #333;
  font-size: 1.3em;
}

.service p {
  color: #666;
  font-size: 1em;
}

.book-now-btn {
  padding: 10px 20px; /* Provides padding inside the button */
  margin: 20px auto; /* Top/bottom margin and auto horizontal margins for centering */
  width: 70%;
  background-color: #000000;
  color: #90EE90;
  border: none;
  border-radius: 5px;
  font-size: 1em;
  line-height: 1; /* Adjust line height for better text alignment */
  display: block; /* Changed to block to allow horizontal centering */
  vertical-align: middle; /* Aligns text vertically */
}



/* Media query for mobile view */
@media (max-width: 600px) {
  .service {
    flex-basis: 100%; /* Each service takes full width */
    margin: 20px 0;
  }

}
</style>
