<template>
    <transition name="modal">

        <div class="modal-mask">
            <div class="modal-background" @click="$emit('close')"></div>
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <slot name="header">
                            default header
                        </slot>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                        </slot>
                    </div>

                    <div class="modal-footer">
                            <slot name="footer"></slot>
                    </div>

                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
    }
</script>

<style scoped>
    .modal-background {
        position: fixed;
        z-index: 9998;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
    }
    .modal-mask {
        position: fixed;
        z-index: 9997;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity .3s ease;
    }

    .modal-wrapper {
        display: flex;
        position: relative;
        z-index: 9999;
        justify-content: center;
        align-items: center;

    }

    .modal-container {
        max-width: 900px;
        margin: 0px auto;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .3s ease;
        font-family: Helvetica, Arial, sans-serif;
    }

    .modal-header h3 {
        margin-top: 0;
        color: #42b983;
    }

    .modal-body {
        margin: 20px 0;
    }

    .modal-default-button {
        float: right;
    }

    .modal-enter {
        opacity: 0;
    }

    .modal-leave-active {
        opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>