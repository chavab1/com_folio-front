<?php

    defined('_JEXEC') or die;

    // Add stylesheet to frontend
    $document = JFactory::getDocument();
    $cssFile = "./media/com_folio/css/site.stylesheet.css";
    $document->addStyleSheet($cssFile);

    $controller = JControllerLegacy::getInstance('Folio');
    $controller->execute(JFactory::getApplication()->input->get('task'));
    $controller->redirect();