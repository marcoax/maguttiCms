<template>
    <span class="ms-auto "
          :class="{inputClass}"
          @click.stop.prevent="copyInput"
          data-bs-toggle="tooltip"
          data-placement="left" title="Copy content in to clipboard">
          <i class="fas fa-clipboard"></i>
    </span>
</template>
<script>
    export default {
        props: ['input-class'],
        methods: {
            copyInput(e) {
                this.$emit('copy', e.target)
            }
        }
    }
</script>
