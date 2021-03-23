<template>
    <div class="quote-page">
        <portal to="title">
            <page-title icon="quote-right">Quotes</page-title>
        </portal>

        <portal to="actions">
            <ui-button key="create-quote-btn" :to="{name: 'quotes.create' }" variant="primary" v-if="$can('quotes.create')">Create Quote</ui-button>
        </portal>

        <ui-card>
            <ui-card-body>
                <ui-table
                	key="quotes"
                	class="quotes-table"
                	id="quotes"
                	endpoint="/datatable/quotes"
                	sort-by="author"
                	show-page-status
                	show-page-numbers
                	show-page-nav
                	show-page-ends>

					<template slot="actions" slot-scope="table">
						<ui-actions :id="'quote_' + table.record.id + '_actions'" :key="'quote_' + table.record.id + '_actions'">
							<ui-dropdown-link
                                v-if="$can('quotes.update')"
                                :to="{ name: 'quotes.edit', params: {quote: table.record.id} }"
                                @click.prevent>
                                Edit
                            </ui-dropdown-link>

							<ui-dropdown-divider></ui-dropdown-divider>

							<ui-dropdown-link
								v-if="$can('quotes.delete')"
								@click.prevent
								v-modal:delete-quote="table.record"
								class="danger">
								Delete
							</ui-dropdown-link>
						</ui-actions>
					</template>
                </ui-table>
            </ui-card-body>
        </ui-card>

        <portal to="modals">
            <ui-modal name="delete-quote" title="Delete Quote" key="delete_quote">
                <p>Are you sure you want to permenantly delete this quote?</p>

                <template slot="footer" slot-scope="quote">
                    <ui-button v-modal:delete-quote @click="destroy(quote.data.id)" variant="danger" class="ml-3">Delete</ui-button>
                    <ui-button v-modal:delete-quote variant="secondary">Cancel</ui-button>
                </template>
            </ui-modal>
        </portal>
    </div>
</template>

<script>
    export default {
        methods: {
            destroy(id) {
                axios.delete(`/api/quotes/${id}`).then((response) => {
                    toast('Quote successfully deleted.', 'success')

                    bus().$emit('refresh-datatable-quotes')
                })
            }
        }
    }
</script>
