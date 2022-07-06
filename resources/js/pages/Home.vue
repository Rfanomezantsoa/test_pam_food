<template>
 <div class="fz-contenaire bg-green">
    <div class="wrapper p-4">
            <section class="fz-header">
                <header class="header">
                    <div class="head-content">

                        <div class="headline_hero">
                            <h1 class="title">
                                Healthy Eating is important part of lifestyle
                            </h1>
                            <div class="sub-title">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque congue arcu
                            </div>
                        </div>
                        <div class="images">
                            <div class="img-main">
                              <img :src="'/img/utils/Image-header-home.png'" alt="">
                            </div>
                            <div class="img-collection">
                                <img :src="'/img/utils/spices1.png'" alt="">
                                <img :src="'/img/sutils/pices2.png'" alt="">
                                <img :src="'/img/sutils/pices3.png'" alt="">
                            </div>
                        </div>
                    </div>

                </header>

            </section>

            <section class="image-box ">
                <div class="fz-card white col-5">
                    <div class="card-body">
                        <img class="card-img" :src="'/img/utils/box-Image.png'">
                        <h4 class="card-title">
                            Start to plan your diet today
                        </h4>
                        <p class="card-text white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque congue arcu
                        </p>
                    </div>
                </div>
                <div class="fz-card white col-3 align-self-strech ">
                    <div class="card-body">
                        <p class="card-text white mb-auto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque congue arcu
                        </p>
                        <img class="card-img" :src="'/img/utils/box-Image2.png'">
                    </div>
                </div>
            </section>

        </div>


 </div>
</template>
<script>
export default {

}
</script>
