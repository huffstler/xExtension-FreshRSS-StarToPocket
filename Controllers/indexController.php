<?php

class FreshExtension_index_Controller extends FreshRSS_index_Controller {
	public function aboutAction() {
		Minz_View::prependTitle(_t('ext.about.new_title') . ' · ');
	}
}
