<template>
    <div class="p-4">
        <div class="container-xl text-left">
            <Header class="p-4 header" />
            <div class="py-4">
                <h1 class="text-2xl pb-4">&langle;Employment History&rangle;</h1>
                <ul>
                    <li class="py-4">
                        <h2 class="text-xl"># MHVillage.com &rarr; Full Stack Software Engineer</h2>
                        <h2 class="text-lg"># 2023 - Present</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Full stack development across many mobile home related projects... <br/>
                              ... with relavent networking, unit testing and CI/CD. <br/>
                            > Project owner, billing and budget overhaul. <br/>
                            > Third Party integrations (RabbitMQ, Hubspot, ETL). <br/>
                            > Junior Developer Mentor. <br/>
                            > PHP/Symfony, AngularJS, Ansible, Redis, Gitlab.
                        </p>
                    </li>
                    <li class="pb-4">
                        
                        <h2 class="text-xl"># Founder / Developer &rarr; SaleWithMe</h2>
                        <h2 class="text-lg"># Founded ca. 2024</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Founded website to fascilitate advertising and... <br/>
                             ... searching for garage/yard/estate sales. <br />
                            > Integrations with Google Cloud Platform including... <br />
                             ... Google Maps and Google Analytics. <br />
                            > PHP/Laravel, InertiaJS, Vue3
                        </p>
                    </li>
                    <li class="pb-4">
                        
                        <h2 class="text-xl"># Backend Software Engineer &rarr; WedgeHR</h2>
                        <h2 class="text-lg"># 2021 - 2023</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Developed asynchronous video interviewing PaaS. <br/>
                            > Third-party integrations with stripe and hubspot. <br/>
                            > Owner-developer on ETL pipeline for digesting job postings. <br/>
                            > PHP/Laravel, React
                        </p>
                    </li>
                    <li>
                        <h2 class="text-xl"># Application Developer &rarr; BlueWorld Inc.</h2>
                        <h2 class="text-lg"># 2018 - 2021</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Lead developer for country-wide elementary school lunch incentive. <br/>
                            > Designed and developed python-based ETL process. <br/>
                            > PHP, PHP/Laravel, Python
                        </p>
                    </li>
                </ul>
                
            </div>
            <Prompt class="py-4 prompt"/>
        </div>
    </div>
</template>
<script setup>
import Prompt from '@/Components/Prompt.vue';
import Header from '@/Components/Header.vue';
</script>