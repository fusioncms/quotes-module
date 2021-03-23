<template>
	<div>
		<portal to="actions">
			<div class="buttons">
				<ui-button v-if="$mq != 'sm'" key="go-back-btn" :to="{ name: 'quotes' }" variant="secondary">Go Back</ui-button>
				<ui-button key="save-btn" variant="primary" @click.prevent="submit" :disabled="!form.hasChanges">Save</ui-button>
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
                :has-error="form.errors.has('author')"
                :error-message="form.errors.get('author')"
                v-model="form.author">
            </ui-input-group>

            <ui-textarea-group
                id="quote-quote"
                name="quote"
                label="Quote"
                help="Enter your quote here."
                autocomplete="off"
                :has-error="form.errors.has('quote')"
                :error-message="form.errors.get('quote')"
                v-model="form.quote">
            </ui-textarea-group>
        </section-card>
	</div>
</template>

<script>
	export default {
		props: {
            form: {
                type: Object,
                required: true
            },
            submit: {
                required: true
            }
        },
	}
</script>