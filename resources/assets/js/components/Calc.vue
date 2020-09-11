<template>
    <div>
        <div class="calc__progress__wrapp mb-5">
            <div v-for="(item, index) in steps" class="calc__progress__step"
                 :class="{'active':step_active==item, 'progress-active':step_active>item}">
                <div class="calc__progress__number">Шаг {{item}} из {{steps.length}}</div>
                <div class="calc__progress__line"></div>
            </div>


        </div>

        <transition name="custom-classes-transition"
                    enter-active-class="animated bounceInLeft"

                    leave-active-class="animated bounceOutRight ts__pos__abs" appear>

            <div v-if="step_active == 1" key="step-1">
                <div class="ts__row">
                    <div v-for="(item, index) in type" class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <checkbox :label="item.name" :value="index" v-model="value.type"></checkbox>
                    </div>
                </div>


            </div>
            <div v-else-if="step_active == 2" key="step-2">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        Количество техники (шт):
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="calc__input input input_bg-blue input_normal">
                            <input type="text" class="input__wrap" v-model="value.amount">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <vue-slider :min="1" :max="1000" tooltip="always" height="8px"
                                    v-model="value.amount"></vue-slider>
                    </div>
                </div>

            </div>

            <div v-else-if="step_active == 3" key="step-3">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        Пробег в месяц, км:
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="calc__input input input_bg-blue input_normal">
                            <input type="text" class="input__wrap" v-model="value.mileage">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <vue-slider :interval="100" :min="100" :max="100000" tooltip="always" height="8px"
                                    v-model="value.mileage"></vue-slider>
                    </div>
                </div>

            </div>

            <div v-else-if="step_active == 4" key="step-4">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        Стоимость литра топлива, руб:
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="calc__input input input_bg-blue input_normal">
                            <input type="text" class="input__wrap" v-model="value.fuel">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <vue-slider :min="10" :max="100" tooltip="always" height="8px"
                                    v-model="value.fuel"></vue-slider>
                    </div>
                </div>

            </div>

            <div v-if="step_active == 5" key="step-5">
                <div class="ts__row">
                    <div v-for="(item, index) in tarif" class="col-md-3 mb-3">
                        <checkbox mode="circle" :label="item.name" :value="index" v-model="value.tarif">
                            Тариф <span class="text_label">{{item.name}} {{item.price}} ₽</span>
                        </checkbox>
                    </div>
                </div>

                <div class="ts__row">
                    <div class="col-md-6">
                        <div class="ts__row mt-2 mb-2">
                            <div class="col-6">Экономия за месяц:</div>
                            <div class="col-6"><div class="calc__result__number">{{totalMonth}} руб</div></div>
                        </div>

                        <div class="ts__row mt-2 mb-2">
                            <div class="col-6">Экономия за год:</div>
                            <div class="col-6"><div class="calc__result__number">{{totalYear}} руб</div></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ts__row mt-2 mb-2">
                            <div class="col-6">Стоимость обслуживания:</div>
                            <div class="col-6"><div class="calc__result__number">{{totalService}} руб</div></div>
                        </div>

                        <div class="ts__row mt-2 mb-2">
                            <div class="col-6">Стоимость решения:</div>
                            <div class="col-6"><div class="calc__result__number">{{totalAll}} руб</div></div>
                        </div>

                    </div>
                </div>

            </div>
        </transition>

        <div class="d-flex justify-content-end mt-3">
            <transition name="custom-classes-transition"
                        enter-active-class="animated bounceInLeft"

                        leave-active-class="animated bounceOutLeft" mode="out-in">

                <a v-if="step_active != 1" class="calc__btn mr-auto btn btn_bg-red btn_border-red btn_italic btn_small"
                   @click.prevent="prev()"
                   href="#"><i class="fa fa-angle-left mr5" key="btnprev"></i> Назад
                </a>


            </transition>
            <transition name="custom-classes-transition"
                        enter-active-class="animated bounceInRight"
                        leave-active-class="animated bounceOutRight" mode="out-in">
                <a v-if="step_active != 5"  @click.prevent="next()"
                   class="calc__btn btn btn_bg-red btn_border-red btn_animate btn_italic btn_small"
                   :class="{'btn__disalbe':validation.hasError()}" href="#">Далее</a>
            </transition>
        </div>

    </div>
</template>

<script>

    const Checkbox = require("./Checkbox.vue");

    const VueSlider = require('vue-slider-component')
    const Vue = require('vue')

    const {TweenLite} = require("gsap");
    const format=require('format-number');
    const SimpleVueValidation = require('simple-vue-validator');
    Vue.use(SimpleVueValidation);

    const Validator = SimpleVueValidation.Validator;

    export default {
        name: 'Calc',
        components: {
            Checkbox,
            VueSlider
        },

        validators: {
            'value.type': function (value) {
                return Validator.value(value).required()
            },

            'value.amount': function (value) {
                return Validator.value(value).required().digit().lessThanOrEqualTo(1000)
            },
            'value.mileage': function (value) {
                return Validator.value(value).required().digit().lessThanOrEqualTo(100000).greaterThanOrEqualTo(100)
            },
            'value.fuel': function (value) {
                return Validator.value(value).required().digit().lessThanOrEqualTo(100).greaterThanOrEqualTo(10)
            },

        },

        data() {
            return {
                step_active: 1,
                steps: [1, 2, 3, 4, 5],
                error: '',
                type: [
                    {
                        name: 'Грузовики',
                        count: 35,
                        price: 21800
                    },
                    {
                        name: 'Спец. техника',
                        count: 40,
                        price: 23800
                    },
                    {
                        name: 'Топливозаправщики',
                        count: 33,
                        price: 22500
                    },
                    {
                        name: 'Тракторы и с/х техника',
                        count: 42,
                        price: 22800
                    },
                    {
                        name: 'Такси',
                        count: 13,
                        price: 10600
                    },
                    {
                        name: 'Поезда',
                        count: 550,
                        price: 35000
                    },
                    {
                        name: 'Легковой транспорт',
                        count: 12,
                        price: 7700
                    }
                ],
                tarif: [
                    {
                        name: 'Стандарт',
                        price: 350
                    },
                    {
                        name: 'Премиум',
                        price: 450
                    },
                    {
                        name: 'VIP',
                        price: 550
                    }
                ],
                value: {
                    type: null,
                    amount: 1,
                    mileage: 100,
                    fuel: 10,
                    tarif: 0
                },
                tweenedService: 0
            }
        },

        created() {

        },
        mounted() {
            this.validate()
        },
        computed: {
            totalMonth() {

                return format({decimalsSeparator:" ", integerSeparator:" "})(this.calcSumm());

            },
            totalYear() {
                return format({decimalsSeparator:" ", integerSeparator:" "})(this.calcSumm()*12);
            },
            totalService() {
                return format({decimalsSeparator:" ", integerSeparator:" "})(Number(this.tweenedService).toFixed(0));
            },
            totalAll() {
                let total = this.type[this.value.type].price * this.value.amount;
                return format({decimalsSeparator:" ", integerSeparator:" "})(total);
            }
        },
        watch: {
            step_active(val) {
                setTimeout(() => {
                    this.validate()
                if(val == 5){
                    $('.calc__form').fadeIn(500)
                }else{
                    $('.calc__form').fadeOut(500)
                }

            }, 100)
            },
            'value.tarif'(newValue) {
                this.calcService()
            },

        },
        methods: {
            calcSumm(){
                return  Math.round((((this.type[this.value.type].count/100) * this.value.mileage * this.value.fuel)*0.15)*this.value.amount);
            },
            calcService(){
                let summ = this.value.amount * this.tarif[this.value.tarif].price
                TweenLite.to(this.$data, 0.5, {tweenedService: summ});
            },


            validate() {
                this.error = ''

                if (this.step_active == 1) {
                    return this.$validate(['value.type'])
                }
                if (this.step_active == 2) {
                    return this.$validate(['value.amount'])
                }

                if (this.step_active == 3) {
                    return this.$validate(['value.mileage'])
                }

                if (this.step_active == 4) {
                    return this.$validate(['value.fuel'])
                }
                if (this.step_active == 5) {

                    this.calcService()
                }


                return true
            },
            next: function () {
                if (this.step_active < this.steps.length) {
                    this.validate().then((success) => {
                        if (success) {
                            this.step_active += 1
                        }

                    })

                }


            },
            prev: function () {
                if (this.step_active > 1) {
                    this.step_active -= 1
                }

            },


        }

    }
</script>


