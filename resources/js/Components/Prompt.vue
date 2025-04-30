<template>
    <div class="text-3xlg">
        <div>
            <p>
                &lsaquo;CD&rsaquo; into one of the following folders (or type in the corresponding number):
            </p>
            <p>
                1. /home<br/>
                2. /work<br />
                3. /projects
            </p>
        </div>
        <p class="py-2 text-xl">
            guest@andrew-bossie.com ~$ <input v-on:keyup.enter="onEnter" v-model="promptInput" autofocus type="text" class="ps-2" />
        </p>
    </div>
</template>
<script setup>
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3'

const props = defineProps(['inputText', 'helpClosed']);

let promptInput = ref("");

function onEnter(event) {
    const selection = event.target.value;
    if (selection == 1 || selection == "cd Home" || selection == "cd home" || selection == "cd /Home" || selection == "cd /home" ||
        selection == "Home" || selection == "home"
    ) {
        router.visit(
            "/"
        );
    }
    else if (selection == 3 || selection == "cd Work" || selection == "cd work" || selection == "cd /Work" || selection == "cd /work" ||
        selection == "Work" || selection == "work"
    ) {
        router.visit(
            "/work"
        );
    }
    else if (selection == 4 || selection == "cd Projects" || selection == "cd projects" || selection == "cd /Projects" || selection == "cd /projects" ||
        selection == "Projects" || selection == "projects"
    ) {
        router.visit(
            "/projects"
        );
    }
    else if (selection.includes("sudo") || selection.includes("su")
    ) {
        promptInput.value = "Permission Denied.";
    }
    else {
        promptInput.value = "Invalid Selection.";
    }
}
</script>