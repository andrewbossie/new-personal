<template>
    <div class="p-4">
        <div class="container-xl text-left">
            <Header class="header p-4" />
            <div class="py-4">
                <h1 class="text-2xl pb-4">&langle;Personal Projects&rangle;</h1>
                <ul>
                    <li class="py-4">
                        <h2 class="text-xl"># Classifying Kepler Objects of Interest with Logistic Regression</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Identifying potential exo-planets with simple logistic regression<br />
                            > Python, Pandas, Numpy, Scikit-Learn, Matplotlib<br />
                            <a href="https://abossie.medium.com/classifying-kepler-objects-of-interest-with-logistic-regression-c1e099632236" class="medium-link text-lg">&rarr; Medium Link &larr;</a>
                        </p>
                    </li>
                    <li class="pb-4">
                        <h2 class="text-xl"># Sentiment Analysis of QAnon Drops</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Discovering the sentiment of QAnon drops using unsupervised K-Means clustering.<br />
                            > Python, Pandas, Numpy, Scikit-Learn, Gensim and Matplotlib<br />
                            <a href="https://abossie.medium.com/sentiment-analysis-of-qanon-drops-75b27b3437e6" class="medium-link text-lg">&rarr; Medium Link &larr;</a>
                        </p>
                    </li>
                    <li class="pb-4">
                        <h2 class="text-xl"># Visualizing UFO Sightings with Plotly.py</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Plotting UFO Sghtings across the United States<br />
                            > Python, Pandas, Plotly<br />
                            <a href="https://abossie.medium.com/visualizing-ufo-sightings-with-plotly-py-a68cd3104d2a" class="medium-link text-lg">&rarr; Medium Link &larr;</a>
                        </p>
                    </li>
                    <li>
                        <h2 class="text-xl"># Task Manager</h2>
                        ----------------------------------------
                        <p class="ps-4">
                            > Simple task manager using Dockerized PHP/Laravel, InertiaJS and Vue.<br />
                            <a href="https://github.com/andrewbossie/task-manager" class="medium-link text-lg">&rarr; Github Link &larr;</a>
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