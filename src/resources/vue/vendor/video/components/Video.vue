<template>
    <div class="vendor-video">
        <video class="video" autoplay playsinline></video>
    </div>
</template>

<script>
    import adapter from 'webrtc-adapter';

    export default {
        props:{

        },
        data(){
            return {
                mediaStreamConstraints: {},
                localVideo : null,
                localStream : null,
            }
        },
        methods: {
            // Handles success by adding the MediaStream to the video element.
            gotLocalMediaStream(mediaStream) {
                this.localStream = mediaStream;
                this.localVideo.srcObject = mediaStream;
            },

            // Handles error by logging a message to the console with the error message.
            handleLocalMediaStreamError(error) {
                console.log('navigator.getUserMedia error: ', error);
            },

            // Initializes media stream.
            initializeMediaStream(){
                navigator.mediaDevices.getUserMedia(this.mediaStreamConstraints)
                    .then(this.gotLocalMediaStream).catch(this.handleLocalMediaStreamError);
            }
        },
        mounted(){
            // On this codelab, you will be streaming only video (video: true).
            this.mediaStreamConstraints = {
                // video: true,
                video: {
                    width: {
                        min: 1280
                    },
                    height: {
                        min: 720
                    }
                }
            };

            // Video element where stream will be placed.
            this.localVideo = document.querySelector('video');

            this.initializeMediaStream();

            alert(4)
        }
    }
</script>


<style>
    video {
        max-width: 100%;
        width: 320px;
        /*filter: blur(4px) invert(1) opacity(0.5);*/
    }
</style>
