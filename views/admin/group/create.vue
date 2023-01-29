<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["mailmass", "group", "form.vue"])
    },
};
</script>
