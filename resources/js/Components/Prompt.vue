<template>
    <div class="text-3xlg">
        <div><p>
                ---------------------------------------------
            </p>
            <p>
                &lsaquo;CD&rsaquo; into one of the following folders: <br/>
                (Or click them)
            </p>
            <p>
                <a href="/">/home</a>&nbsp;|
                <a href="/work">/work</a>&nbsp;|
                <a href="/projects">/projects</a>
            </p>
        </div>
        <pre class="py-2 text-xl">
&#8972;[guest@andrew-bossie.com]
&#8974;:~$ <input v-on:keyup.enter="onEnter" v-model="promptInput" autofocus type="text" class="ps-2 text-sm" />
        </pre>
    </div>
</template>
<script setup>
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3'

const props = defineProps(['inputText', 'helpClosed']);

let promptInput = ref("");

function onEnter(event) {
    const selection = event.target.value;
    if (selection == 1 || selection == "Cd Home" || selection == "cd Home" || selection == "cd home" || selection == "cd /Home" || selection == "cd /home" ||
        selection == "Home" || selection == "home"
    ) {
        router.visit(
            "/"
        );
    }
    else if (selection == 3 || selection == "Cd work" || selection == "cd Work" || selection == "cd work" || selection == "cd /Work" || selection == "cd /work" ||
        selection == "Work" || selection == "work"
    ) {
        router.visit(
            "/work"
        );
    }
    else if (selection == 4 || selection == "Cd projects" || selection == "cd Projects" || selection == "cd projects" || selection == "cd /Projects" || selection == "cd /projects" ||
        selection == "Projects" || selection == "projects"
    ) {
        router.visit(
            "/projects"
        );
    }
    else if (selection.includes("sudo") || selection.includes("su")
    ) {
        promptInput.value = "Straight to jail.";
        this.timeoutId = setTimeout(() => {
            promptInput.value = "";
        }, 1000);
    }
    else {
        promptInput.value = "Invalid Selection.";
        this.timeoutId = setTimeout(() => {
            promptInput.value = "";
        }, 1000);
    }
}
</script>