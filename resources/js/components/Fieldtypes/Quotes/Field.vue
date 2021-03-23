<template>
    <ui-select-group
        :name="field.handle"
        :label="field.name"
        :help="field.help"
        :options="options"
        :filterable="!! field.settings.filterable"
        :multiple="!! field.settings.multiple"
        v-model="model">
    </ui-select-group>
</template>

<script>
    export default {
        name: 'quote-fieldtype',

        data() {
            return {
                options: [{ label: 'None', value: null }]
            }
        },

        props: {
            field: {
                type: Object,
                required: true,
            },

            value: {
                required: false,
                default: null
            },
        },

        computed: {
            model: {
                get() {
                    return this.value
                },

                set(value) {
                    this.$emit('input', value)
                }
            }
        },

        created() {
            axios.get('/api/quotes').then((response) => {
                let quotes = response.data.data

                quotes.forEach((quote) => {
                    this.options.push({
                        label: `${quote.display}`,
                        value: quote.id
                    })
                })
            })
        }
    }
</script>
