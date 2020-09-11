<template>
    <div  :class="[{'active':checkboxState},'ts__checkbox']" @click="toggle()">
        <div :class="styleChechbox">

            <i v-if="checkboxState && mode == 'box'" class="icon-topseo icon-topseo-tick"></i>
            <span v-else></span>
        </div>
        <div class="ts__checkbox__label">
            <slot>{{label}}</slot>
        </div>
    </div>
</template>

<script>


    export default {
        name: 'Checkbox',
        data () {
            return {
                uniqueId: '',
            }
        },
        model: {
            prop: 'checked',
            event: 'change'
        },
        props: {
            id: {
                type: String,
                default: undefined
            },
            disabled: Boolean,
            name: String,
            label:String,
            type:{
                type:String,
                default:'checkbox'
            },
            mode:{
                type:String,
                default:'box'
            },
            checked: [String, Boolean, Number, Object, Array, Function],
            value: [String, Boolean, Number, Object, Array, Function],
        },
        computed: {
            checkboxState() {


                if (Array.isArray(this.checked)){
                    return this.checked.findIndex((el)=>{
                        return el == this.value
                    }) !== -1
                }


                return this.checked == this.value
            },

            styleChechbox(){
                return 'ts__checkbox__'+this.mode
            }
        },
        mounted() {
            this.genId()

        },
        methods: {
            toggle() {
                if(this.disabled) return
                let v = this.checked
                if (Array.isArray(v)) {
                    const i = v.indexOf(this.value)
                    if (i === -1){
                        v.push(this.value)
                    }
                    else{
                        v.splice(i, 1)
                    }
                }
                else{
                    if(v == this.value){
                        v = null
                    }else{
                        v = this.value
                    }
                }
                this.$emit('change', v)
            },

            genId() {
                if (this.id === undefined || typeof String) {
                    this.uniqueId = `m-checkbox--${Math.random().toString(36).substring(2,10)}`
                }
                else {
                    this.uniqueId = this.id
                }
            }

        },
        watch: {
            // checked(v) {
            //     if (v !== this.checkboxState) this.toggle()
            // },

        },

    }
</script>


