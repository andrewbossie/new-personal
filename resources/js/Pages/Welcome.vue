<template>
    <div class="p-4">
        <div class="container-xl text-left">
            <div class="p-4">
                <Header/>
            </div>
            <div class="py-4">
                <p>
                    # Hey there, welcome to my personal portfolio! <br />
                    # I'm Andrew and I've been a software engineer for 8+ years. 
                    # I have full stack experence from server provisioning, networking backend all the way up to front end vue/react/angular. <br />
                    # I have a proven record of delivering super star software on time and more importantly 
                    of high quality. 
                    # I am detemined and have a passion for tech, future concepts and learning. <br />
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