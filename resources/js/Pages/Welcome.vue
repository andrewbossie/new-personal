<template>
    <div class="p-4">
        <div class="container-xl text-left">
            <div class="p-4">
                <Header/>
            </div>
            <div class="py-4">
                <p>
                    # Hey, I'm Andrew and I'm a full-stack software engineer of almost a decade. <br />
                    # I have broad experence from server provisioning, networking, backend all the way up to front end vue/react/angular. <br />
                    <!-- # I have a proven record of delivering super star software on time and more importantly 
                    of high quality. <br /> -->
                    # I have a passion for tech, future concepts and learning everything! <br />
                    # Feel free to poke around and read about me and my experience!
                </p>
            </div>
            <Prompt />
        </div>
    </div>
</template>
<script setup>
import Prompt from '@/Components/Prompt.vue';
import Header from '@/Components/Header.vue';
</script>