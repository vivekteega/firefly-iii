<?php

namespace FireflyIII\Repositories\Journal;

use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\Models\TransactionType;
use Illuminate\Support\Collection;

/**
 * Interface JournalRepositoryInterface
 *
 * @package FireflyIII\Repositories\Journal
 */
interface JournalRepositoryInterface
{
    /**
     * Get users first transaction journal
     *
     * @return TransactionJournal
     */
    public function first();

    /**
     *
     * Get the account_id, which is the asset account that paid for the transaction.
     *
     * @param TransactionJournal $journal
     *
     * @return int
     */
    public function getAssetAccount(TransactionJournal $journal);

    /**
     * @param TransactionType $dbType
     *
     * @return Collection
     */
    public function getJournalsOfType(TransactionType $dbType);

    /**
     * @param string             $query
     * @param TransactionJournal $journal
     *
     * @return Collection
     */
    public function searchRelated($query, TransactionJournal $journal);


    /**
     * @param $type
     *
     * @return TransactionType
     */
    public function getTransactionType($type);
    /**
     * @param array $data
     *
     * @return TransactionJournal
     */
    public function store(array $data);

    /**
     * @param TransactionJournal $journal
     * @param array              $data
     *
     * @return mixed
     */
    public function update(TransactionJournal $journal, array $data);
}