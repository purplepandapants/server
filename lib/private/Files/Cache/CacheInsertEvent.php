<?php declare(strict_types=1);
/**
 * @copyright Copyright (c) 2019 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OC\Files\Cache;

use OCP\Files\Storage\IStorage;
use Symfony\Component\EventDispatcher\Event;

class CacheInsertEvent extends Event {
	private $storage;
	private $path;
	private $fileId;

	public function __construct(IStorage $storage, string $path, int $fileId) {
		$this->storage = $storage;
		$this->path = $path;
		$this->fileId = $fileId;
	}

	public function getStorage(): IStorage {
		return $this->storage;
	}

	public function getPath(): string {
		return $this->path;
	}

	public function getFileId(): int {
		return $this->fileId;
	}
}
