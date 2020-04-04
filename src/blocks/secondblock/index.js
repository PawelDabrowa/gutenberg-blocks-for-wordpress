import './styles.editor.scss';
// import { registerBlockType} from '@wordpress/blocks';
// import { __ } from '@wordpress/i18n'
const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

registerBlockType('fox-theme-blocks/secondblock', {
    title: __('Second Block', 'fox-theme-blocks'),
    description: __('Blocks for Fox Themes', 'fox-theme-blocks'),
    category: 'layout',
    icon: {
        background: '#52ADFE',
        foreground: '#FFF',
        src: 'edit'
    },
    keywords: [__('photo','fox-theme-blocks'), __('image', 'fox-theme-blocks'),__('fox','fox-theme-blocks')],
    edit: ({ className }) => {
        return <p className={className}>Editor</p>;
    },
    save: () => {
        return <p>Saved Content</p>;
    }
})