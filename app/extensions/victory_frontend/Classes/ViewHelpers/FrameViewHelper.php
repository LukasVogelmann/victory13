<?php

declare(strict_types=1);

namespace Victory\VictoryFrontend\ViewHelpers;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This ViewHelper is for the Default-Layout when rendering a Content-Element.
 * It handles and generates the classes to have a cleaner view.
 */
class FrameViewHelper extends AbstractViewHelper
{
    /**
     * Initialization of required arguments for this ViewHelper.
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('data', 'array', 'The default data-array a view receives.', true);
    }

    /**
     * The actual render logic whenever this VH gets called.
     * Handles the given arguments, generates and adds at the end
     *
     * @return void
     */
    public function render()
    {
        $data = $this->arguments['data'];

        $frameClasses          = '';
        $frameSpaceBeforeClass = '';
        $frameSpaceAfterClass  = '';

        if ($data['frame_class'] != 'none') {
            if ($data['space_before_class'] != '') {
                $frameSpaceBeforeClass = ' frame-space-before-' . $data['space_before_class'];
            }

            if ($data['space_after_class'] != '') {
                $frameSpaceAfterClass = ' frame-space-after-' . $data['space_after_class'];
            }

            $frameClasses = 'frame frame-' . $data['frame_class'] . ' frame-type-' . $data['CType'] . ' frame-layout-' . $data['layout'] . $frameSpaceBeforeClass . $frameSpaceAfterClass;
        }

        // $background = $data['s_container_background'] ?? null;
        // $css = '';

        // if ($background) {
        //     $selector = "container-1col-background-{$data['uid']}";
        //     $css .= ".{$selector} { background: {$background} }";
        //     $this->templateVariableContainer->add('1colBackgroundClass', $selector);
        // }

        // GeneralUtility::makeInstance(PageRenderer::class)->addCssInlineBlock('1col-css-'.$data['uid'], $css);

        $this->templateVariableContainer->add('frameClasses', $frameClasses);
    }
}
