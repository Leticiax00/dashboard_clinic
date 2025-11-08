<?php
/**
 * Mascara o e-mail (ex: ma***@gmai***.com)
 */
function mask_email(string $email): string
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email; // Não é um email válido
        }

        list($user, $domain) = explode('@', $email);
        $userLength = strlen($user);
        $domainParts = explode('.', $domain);

        // Mascara o nome de usuário (exibe 2, mascara o meio, exibe 1)
        $maskedUser = substr($user, 0, 2) . str_repeat('*', max(1, $userLength - 3)) . substr($user, -1);
        
        // Mascara o domínio principal (exibe 1, mascara o meio, exibe 1)
        $maskedDomain = substr($domainParts[0], 0, 1) . str_repeat('*', max(1, strlen($domainParts[0]) - 2)) . substr($domainParts[0], -1);
        
        return $maskedUser . '@' . $maskedDomain . '.' . $domainParts[1];
    }

/**
 * Mascara o telefone (ex: (99) 9****-9999)
 */
function mask_phone(string $phone): string
{
    // Remove tudo que não for número
    $cleanPhone = preg_replace('/[^0-9]/', '', $phone);
    $length = strlen($cleanPhone);

    if ($length < 10) {
        return $phone; // Telefone muito curto
    }

    // Padrão (DD) XXXXX-XXXX
    $dd = substr($cleanPhone, 0, 2);
    $firstBlock = substr($cleanPhone, 2, 5); // 5 dígitos (ex: 98765)
    $lastBlock = substr($cleanPhone, 7);    // 4 dígitos (ex: 4321)

    // Mascara o primeiro bloco (ex: 9****)
    $maskedFirstBlock = substr($firstBlock, 0, 1) . str_repeat('*', 4);
    
    // Devolve no formato
    return '(' . $dd . ') ' . $maskedFirstBlock . '-' . $lastBlock;
}