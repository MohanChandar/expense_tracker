<?php

/**
 * list.php
 * Copyright (c) 2019 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'buttons'                 => 'Boutons',
    'icon'                    => 'Icône',
    'id'                      => 'Identifiant',
    'create_date'             => 'Créé le',
    'update_date'             => 'Mis à jour le',
    'updated_at'              => 'Mis à jour le',
    'balance_before'          => 'Solde avant',
    'balance_after'           => 'Solde après',
    'name'                    => 'Nom',
    'role'                    => 'Rôle',
    'currentBalance'          => 'Solde courant',
    'linked_to_rules'         => 'Règles applicables',
    'active'                  => 'Actif ?',
    'percentage'              => 'pct.',
    'next_due'                => 'Prochaine échéance',
    'transaction_type'        => 'Type',
    'lastActivity'            => 'Activité récente',
    'balanceDiff'             => 'Différence de solde',
    'matchesOn'               => 'Correspond à',
    'other_meta_data'         => 'Autres métadonnées',
    'account_type'            => 'Type de compte',
    'created_at'              => 'Créé le',
    'account'                 => 'Compte',
    'matchingAmount'          => 'Montant',
    'split_number'            => 'Ventilation n°',
    'destination'             => 'Destination',
    'source'                  => 'Source',
    'next_expected_match'     => 'Prochaine association attendue',
    'automatch'               => 'Correspondance automatique ?',
    'repeat_freq'             => 'Répétitions',
    'description'             => 'Description',
    'amount'                  => 'Montant',
    'internal_reference'      => 'Référence interne',
    'date'                    => 'Date',
    'interest_date'           => 'Date des intérêts',
    'book_date'               => 'Date de réservation',
    'process_date'            => 'Date de traitement',
    'due_date'                => 'Échéance',
    'payment_date'            => 'Date de paiement',
    'invoice_date'            => 'Date de facturation',
    'interal_reference'       => 'Référence interne',
    'notes'                   => 'Notes',
    'from'                    => 'Depuis',
    'piggy_bank'              => 'Tirelire',
    'to'                      => 'À',
    'budget'                  => 'Budget',
    'category'                => 'Catégorie',
    'bill'                    => 'Facture',
    'withdrawal'              => 'Retrait',
    'deposit'                 => 'Dépôt',
    'transfer'                => 'Transfert',
    'type'                    => 'Type',
    'completed'               => 'Terminé',
    'iban'                    => 'Numéro IBAN',
    'paid_current_period'     => 'Payé cette période',
    'email'                   => 'E-mail',
    'registered_at'           => 'Enregistré le',
    'is_blocked'              => 'Est bloqué',
    'is_admin'                => 'Est admin',
    'has_two_factor'          => 'A 2FA',
    'blocked_code'            => 'Code de blocage',
    'source_account'          => 'Compte d\'origine',
    'destination_account'     => 'Compte destinataire',
    'accounts_count'          => 'Nombre de comptes',
    'journals_count'          => 'Nombre d\'opérations',
    'attachments_count'       => 'Nombre de pièces jointes',
    'bills_count'             => 'Nombre de factures',
    'categories_count'        => 'Nombre de catégories',
    'import_jobs_count'       => 'Nombre de travaux importés',
    'budget_count'            => 'Nombre de budgets',
    'rule_and_groups_count'   => 'Nombre de règles et de groupes de règles',
    'tags_count'              => 'Nombre d’étiquettes',
    'tags'                    => 'Tags',
    'inward'                  => 'Description vers l’intérieur',
    'outward'                 => 'Description de l’extérieur',
    'number_of_transactions'  => 'Impact sur l\'autre transaction',
    'total_amount'            => 'Montant total',
    'sum'                     => 'Somme',
    'sum_excluding_transfers' => 'Somme (hors transferts)',
    'sum_withdrawals'         => 'Somme des retraits',
    'sum_deposits'            => 'Somme des dépôts',
    'sum_transfers'           => 'Somme des transferts',
    'sum_reconciliations'     => 'Sum of reconciliations',
    'reconcile'               => 'Rapprocher',
    'account_on_spectre'      => 'Compte (Spectre)',
    'account_on_ynab'         => 'Compte (YNAB)',
    'do_import'               => 'Importer depuis ce compte',
    'sepa_ct_id'              => 'Identificateur de bout en bout SEPA',
    'sepa_ct_op'              => 'Identifiant de compte SEPA opposable',
    'sepa_db'                 => 'Identifiant de mandat SEPA',
    'sepa_country'            => 'Pays SEPA',
    'sepa_cc'                 => 'Code de rapprochement SEPA',
    'sepa_ep'                 => 'Usage externe SEPA',
    'sepa_ci'                 => 'Identifiant Créancier SEPA',
    'sepa_batch_id'           => 'ID de lot SEPA',
    'external_id'             => 'ID externe',
    'account_at_bunq'         => 'Compte avec bunq',
    'file_name'               => 'Nom du fichier',
    'file_size'               => 'Taille du fichier',
    'file_type'               => 'Type de fichier',
    'attached_to'             => 'Attaché à',
    'file_exists'             => 'Le fichier existe',
    'spectre_bank'            => 'Banque',
    'spectre_last_use'        => 'Dernière connexion',
    'spectre_status'          => 'Statut',
    'bunq_payment_id'         => 'ID de paiement bunq',
    'repetitions'             => 'Répétitions',
    'title'                   => 'Titre',
    'transaction_s'           => 'Opération(s)',
    'field'                   => 'Champ',
    'value'                   => 'Valeur',
    'interest'                => 'Intérêt',
    'interest_period'         => 'période d’intérêt',
    'liability_type'          => 'Type de passif',
];
