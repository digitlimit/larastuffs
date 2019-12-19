<template>
    <div class="admin-post-Fields">

        <div class="form-group">
            <label for="title" class="col-form-label">Title</label>
            <input id="title" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Details</label>
            <quill-editor v-model="content"
                          ref="myQuillEditor"
                          :options="editorOption"
                          @blur="onEditorBlur($event)"
                          @focus="onEditorFocus($event)"
                          @ready="onEditorReady($event)">
            </quill-editor>

        </div>

    </div>
</template>

<script>
    import 'quill/dist/quill.core.css'
    import 'quill/dist/quill.snow.css'
    import 'quill/dist/quill.bubble.css'

    import { quillEditor } from 'vue-quill-editor'

    export default {
        name: 'PostForm',

        data(){
            return {
                content: '<p>example content</p>',
                editorOption: { /* quill options */ }
            };
        },
        components: {
            quillEditor
        },
        methods: {
            onEditorBlur(quill) {
                console.log('editor blur!', quill)
            },
            onEditorFocus(quill) {
                console.log('editor focus!', quill)
            },
            onEditorReady(quill) {
                console.log('editor ready!', quill)
            },
            onEditorChange({ quill, html, text }) {
                console.log('editor change!', quill, html, text)
                this.content = html
            }
        },
        computed: {
            editor() {
                return this.$refs.myQuillEditor.quill
            }
        },
        mounted() {
            console.log('this is current quill instance object', this.editor)
        }
    }
</script>