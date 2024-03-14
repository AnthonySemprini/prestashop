<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC5yZGI2AVaObz6'."\n".'/gs2iUwE5PY5iruD/DqXMeXGdPwJETX6cTOCQUsVPfEgvV3p3VYls9IsbnqJoB/O'."\n".'f980mWNxzz+9r8OCSoAVqQWDeFgLJWsMaC8JqjtqifM25d2PfM64RdpQaK1xmM/P'."\n".'FuRjLuzFWI7qVdmK6ZK7bFf0A1HFh8dw50k8EaLqqKaV+UbMiz/d1LYZJftpCkyG'."\n".'ua2j6F/ILcOXXYPd43TjKWbKBY1SVv/x5gfCmftMSTOQCsjAqJApXOUEcpef43fB'."\n".'xPiEZtFq8GhESUQt0dLHpZgkbRUULbvfr34axUhReHfrexscuiTFPjNW8gFS/Cu9'."\n".'iE+B2UOdAgMBAAECggEAMlmHQH/Sy4X0Sk1I+qmw2W63sBaCBR35Pvp93A/eMhLg'."\n".'/xNoszdAwuv7ijTn27ZpX2RhZDs4qE2l8Q/EjPu48KILEzwsDwZjufsJjHyz16l3'."\n".'XnBptwPUgGYMbOdU6UsYtuXvaXVE9BFG2EfK83pHHqCGcsl7YGM2qeaN24p+wbo4'."\n".'eu4XyWKX8WyuKIqZXqgj1mCIoQDhXkv3vc5G7VMSCF+qOJq/CniETk9vT7PkAarX'."\n".'VhFqSAklawhM/tptEAh10EkB1OkIiMKZCyaC1lfhPyLMHsDxjvE6QQHP2SGkLIHs'."\n".'zdLKyRgulxM9qv8Oc/7O9jitchzDJ4aycDAwCQT4vQKBgQD0wtNL0+hEWXb6sUH6'."\n".'nfFwbOVEVs9rZKcQvkZYUMzt+z8Cp0FoHUWCkhUMgB3q7RrE5z6uyRgfr/9foTj+'."\n".'x7Tvz5CYpG4Jh2YtihTF/og0sTBvp7SHWHqtp4JVPY8U7UFyh3Boy1eQ0Zm3MR32'."\n".'fSAivOjQGB5niBhXC5J8S4iCPwKBgQDCUYFzayd2Sqx3ij7NF/bQbaEXiWH1V5tf'."\n".'u9pO1HDElfpZGTQVVdGM62Uwi3+LI2VpBbaipoWgr2P1liBjNhYtkIPAxB9JL+yN'."\n".'JL2lOn2SQtZHmsr1BOw8i1SsWkFkdEPUil5LWTdESbEb0Yt9oG8OV2IIgBpPXvaK'."\n".'SzYI0DlLIwKBgQCsfp2BBC/d85sZZFEWebdNP0F4nyGBEyd2clKLLS6vzXCDwzIi'."\n".'WPbC5Yb2D1iGV2GVQU94yPo6YsO8Npg/XqlSlNrX6JIwHv9Qus6XFyIQ2ItFNVDS'."\n".'TfXvam08+6xZ2DdWqsL658unoUAOzgvKyjYapT4CYe0Tk+NrfRlYhbcH6wKBgD07'."\n".'B6qB6mZo812br1xbH8ffs7JB9R8lIu2QuSK76GjZxZBL09ChQS3Bgxo/6snCNpNY'."\n".'XIt2I4dVnQ7m5n+8rFJhRlL4uc8LDeQP3r5w5t6utuzLRwbcLUCKuvywWAi6ZiFU'."\n".'FJBzpWmcOvXEGstUQYpoWJjLHP9DsjYzquwuCM+3AoGAXRf7nV0l+VpnkNaDmVJl'."\n".'FQvn5TdyYggxRnW0O2MIjF+G1PlpIqmzNkq/90/+Z60MFT1rmkwaTmWEWEP4XQGH'."\n".'d9QZuM7hGUJXGzw+iF1icg6rWO2GedmCqqmkMj2RW4YAQmkrrLtodqQMKi7LlBAB'."\n".'5eBr17s5pSEbl3uWr5Xvfog='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000f92705be8f6442c98da4153c397f202d367dffb9cb8f327409c40dba3f17dc3243e9aaa44c0b5fb0f27ddb3f1d7eabbaa1f8db9f844d8fe1ddc222e4b3a505d3');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);