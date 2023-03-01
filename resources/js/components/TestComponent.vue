<template>
    <p class="greeting">{{ greeting }}</p>
</template>

<script>
    export default {
        props: ['foo'],
        data() {
            return {
                greeting: 'Hello World!'
            }
        },
        created() {
            // props are exposed on `this`.
            console.log(this.foo)
        }
    }
</script>

<style>
    .greeting {
        color: red;
        font-weight: bold;
    }
</style>
