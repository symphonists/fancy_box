<?php

	class extension_fancy_box extends Extension {

		public function about(){
			return array(
				'name' => 'FancyBox Plugin',
				'version' => '1.0',
				'release-date' => '2009-12-04',
				'author' => array(
						'name' => 'Rainer Borene',
						'website' => 'http://rainerborene.com/',
						'email' => 'rainerborene@gmail.com'
					)
			);
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/backend/',
					'delegate' => 'AdminPagePreGenerate',
					'callback' => 'appendAssets'
				)
			);
		}

		public function appendAssets($context){
			$callback = Administration::instance()->getPageCallback();

			if ($callback['driver'] == 'publish' && ($callback['context']['page'] == 'index' || $callback['context']['page'] == 'edit')) {
				$page = Administration::instance()->Page;

				$page->addStylesheetToHead(URL . '/extensions/fancy_box/assets/jquery.fancybox-1.2.6.css', 'screen', 40);
				$page->addScriptToHead(URL . '/extensions/fancy_box/assets/jquery.fancybox-1.2.6.pack.js', 100);
				$page->addScriptToHead(URL . '/extensions/fancy_box/assets/fancybox.js', 101);
			}
		}

	}
