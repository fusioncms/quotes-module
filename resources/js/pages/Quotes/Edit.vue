<template>
    <div class="quote-page">
        <portal to="title">
            <page-title icon="quote-right">Edit Quote</page-title>
        </portal>

        <portal to="actions">
            <div class="buttons">
                <ui-button v-if="$mq != 'sm'" key="go-back-btn" :to="{ name: 'quotes' }" variant="secondary">Go Back</ui-button>
                <ui-button key="save-btn" variant="primary" @click.prevent="submit">Save</ui-button>
            </div>
        </portal>

        <section-card id="quote_panel_general" title="General Information" description="General information about this quote." tabindex="-1">
            <ui-input-group
                id="quote-author"
                name="author"
                label="Author"
                autocomplete="off"
                autofocus
                required
                :has-error="'author' in errors"
                :error-message="errors['author']"
                v-model="form.author">
            </ui-input-group>

            <ui-textarea-group
                id="quote-quote"
                name="quote"
                label="Quote"
                help="Enter your quote here."
                autocomplete="off"
                :has-error="'quote' in errors"
                :error-message="errors['quote']"
                v-model="form.quote">
            </ui-textarea-group>
        </section-card>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                quote: {},
                form: {
                    '_method': 'PATCH',
                    author: '',
                    quote: ''
                },
                errors: {}
            }
        },

        methods: {
            submit() {
                axios.post(`/api/quotes/${this.quote.id}`, this.form).then((response) => {
                    toast('Quote successfully created', 'success')

                    this.$router.push('/quotes')
                }).catch((error) => {
                    this.errors = error.response.data.errors

                    toast(error.response.data.message, 'failed')
                })
            },
        },

        beforeRouteEnter(to, from, next) {
            getQuote(to.params.quote, (error, quote) => {
                if (error) {
                    next((vm) => {
                        vm.$router.push('/quotes')

                        toast(error.toString(), 'danger')
                    })
                } else {
                    next((vm) => {
                        vm.quote = quote
                        vm.form.author = quote.author
                        vm.form.quote  = quote.quote
                    })
                }
            })
        },
    }

    export function getQuote(id, callback) {
        axios.get(`/api/quotes/${id}`).then((response) => {
            callback(null, response.data.data)
        }).catch(function(error) {
            callback(new Error('Quotes could not be found'))
        })
    }
</script>