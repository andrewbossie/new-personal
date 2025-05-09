<template>
        <div class="text-left">
            <Header class="p-4 header" ></Header>
            <div class="info p-4">
                <p class="text-md text-xl">
                    # Hey, I'm Andrew and I'm a full-stack software engineer of almost a decade. <br />
                    # I have broad experence from server provisioning, networking, backend all the way up to front end vue/react/angular. <br />
                    <!-- # I have a proven record of delivering super star software on time and more importantly 
                    of high quality. <br /> -->
                    # I have a passion for tech, future concepts and learning everything! <br />
                    # Feel free to poke around and read about me and my experience!
                </p>
            </div>
        </div>
        <Prompt class="prompt px-4" />
</template>
<script setup>
import Prompt from '@/Components/Prompt.vue';
import Header from '@/Components/Header.vue';
</script>