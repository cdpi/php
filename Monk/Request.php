<?php

namespace Monk;

use function \array_key_exists, \strcasecmp;

/**
 * <h1>Request</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Request extends Util
	{
	use Server, Header;

	/**
	 * @since 0.1.0
	 */
	public final function getMethod():string|null
		{
		return $this->getRequestMethod();
		}

	/**
	 * @since 0.1.0
	 */
	public final function getURI():string|null
		{
		return $this->getRequestURI();
		}

	/**
	 * @since 0.1.0
	 */
	public final function isGet():bool
		{
		//return strcasecmp('GET', $this->getRequestMethod()) === 0;
		return self::equals('GET', $this->getRequestMethod());
		}

	/*
	public final function _acceptLanguage(string $language):bool
		{
		return array_key_exists($language, $this->parseAcceptLanguage());
		}
	*/

	/**
	 * @since 0.1.0
	 */
	public final function getPreferredLanguage($defaultPreferredLanguage = null):string|null
		{
		// fr, de, it

		/**
		 * IA Cockpit
 * Retourne la première valeur présente à la fois dans $a et $b,
 * en respectant l’ordre de $a. Comparaison stricte.
 *
 * @param array $a Tableau source (prioritaire pour l’ordre)
 * @param array $b Tableau de référence
 * @return mixed|null Valeur commune ou null si aucune
 */
/*
function premiereValeurCommune(array $a, array $b): mixed
{
    $ensembleB = array_flip($b); // Conversion en map pour accélérer la recherche

    foreach ($a as $valeur) {
        if (array_key_exists($valeur, $ensembleB)) {
            return $valeur;
        }
    }

    return null;
}

// 🔬 Exemple d'utilisation
$tabA = ['orange', 'banane', 'cerise'];
$tabB = ['kiwi', 'banane', 'pomme'];

echo premiereValeurCommune($tabA, $tabB); // Affiche : banane
*/
		}

	/**
	 * @since 0.1.0
	 */
	public final function parseAccept():array
		{
		return $this->parseHeader($this->getAccept());
		}

	/*
	public final function parseAcceptCharset():array
		{
		throw new \Exception("HTTP_ACCEPT_CHARSET header is not supported yet. Please use the HTTP_ACCEPT_LANGUAGE header instead.");
		}
	*/

	/**
	 * @since 0.1.0
	 */
	public final function parseAcceptEncoding():array
		{
		return $this->parseHeader($this->getAcceptEncoding());
		}

	/**
	 * @since 0.1.0
	 */
	public final function parseAcceptLanguage():array
		{
		return $this->parseHeader($this->getAcceptLanguage());
		}
	}
