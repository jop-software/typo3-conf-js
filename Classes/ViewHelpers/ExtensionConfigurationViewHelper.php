<?php

namespace JopSoftware\TYPO3\ConfJs\ViewHelpers;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class ExtensionConfigurationViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    protected $escapeOutput = false;

    public function initializeArguments(): void
    {
        $this->registerArgument(
            "extKey",
            "string",
            "Extension key of the extension you want to load the configuration form",
            true,
        );
    }

    /**
     * @return array<mixed>|null
     */
    private function loadExtensionConfigurationFor(string $extKey): ?array
    {
        $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);

        try {
            $conf = (array)$extensionConfiguration->get($extKey);
        } catch (\Exception $exception) {
            // TODO: Logging
            $conf = null;
        }

        return $conf;
    }

    public function render(): string
    {
        $extKey = $this->arguments["extKey"] ?? null;
        if (!$extKey) {
            // TODO: Logging
            return "";
        }

        $extConf = $this->loadExtensionConfigurationFor($extKey);
        $jsObject = json_encode($extConf);

        return <<<EOF
<script>
window.extConf = window.extConf || new Map();
window.extConf.set('$extKey', JSON.parse('{$jsObject}'));
</script>
EOF;
    }
}
