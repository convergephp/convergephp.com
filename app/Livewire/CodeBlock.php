<?php

namespace App\Livewire;

use Livewire\Component;

class CodeBlock extends Component
{
    public string $code;
    public string $language = 'php';

    public function render()
    {
        // Échapper le HTML
        $formattedCode = htmlspecialchars($this->code);

        // Formatage simple avec des regex
        if ($this->language === 'php') {
            // Mots-clés - utilisation d'expressions régulières avec limites de mots
            $keywords = ['namespace', 'use', 'class', 'extends', 'public', 'function', 'return', 'string'];
            foreach ($keywords as $keyword) {
                // Utilisation de pattern qui vérifie les limites de mots entiers
                $pattern = '/\b(' . preg_quote($keyword, '/') . ')\b(?![^<]*>)/';
                $formattedCode = preg_replace($pattern, '<span class="keyword">$1</span>', $formattedCode);
            }

            // Commentaires
            $formattedCode = preg_replace('/\/\*\*(.*?)\*\//s', '<span class="comment">/**$1*/</span>', $formattedCode);

            // Chaînes - éviter de remplacer dans les balises HTML déjà formatées
            $formattedCode = preg_replace('/\'(.*?)\'(?![^<]*>)/', '<span class="string">\'$1\'</span>', $formattedCode);

            // Espaces de noms et classes
            $formattedCode = preg_replace('/\\\\([A-Za-z0-9_]+)(?![^<]*>)/', '\\<span class="namespace">$1</span>', $formattedCode);

            // Méthodes statiques - éviter de remplacer dans les balises déjà formatées
            $formattedCode = preg_replace('/(\w+)::([\w]+)(?![^<]*>)/', '$1::<span class="method">$2</span>', $formattedCode);
        }

        return view('livewire.code-block', [
            'formattedCode' => $formattedCode,
            'lines' => count(explode("\n", $this->code))
        ]);
    }
}
