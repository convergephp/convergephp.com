CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "users"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "email" varchar not null,
  "email_verified_at" datetime,
  "password" varchar not null,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  "isAdmin" tinyint(1) not null default '0'
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "sessions"(
  "id" varchar not null,
  "user_id" integer,
  "ip_address" varchar,
  "user_agent" text,
  "payload" text not null,
  "last_activity" integer not null,
  primary key("id")
);
CREATE INDEX "sessions_user_id_index" on "sessions"("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions"("last_activity");
CREATE TABLE IF NOT EXISTS "cache"(
  "key" varchar not null,
  "value" text not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE TABLE IF NOT EXISTS "cache_locks"(
  "key" varchar not null,
  "owner" varchar not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE TABLE IF NOT EXISTS "jobs"(
  "id" integer primary key autoincrement not null,
  "queue" varchar not null,
  "payload" text not null,
  "attempts" integer not null,
  "reserved_at" integer,
  "available_at" integer not null,
  "created_at" integer not null
);
CREATE INDEX "jobs_queue_index" on "jobs"("queue");
CREATE TABLE IF NOT EXISTS "job_batches"(
  "id" varchar not null,
  "name" varchar not null,
  "total_jobs" integer not null,
  "pending_jobs" integer not null,
  "failed_jobs" integer not null,
  "failed_job_ids" text not null,
  "options" text,
  "cancelled_at" integer,
  "created_at" integer not null,
  "finished_at" integer,
  primary key("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "connection" text not null,
  "queue" text not null,
  "payload" text not null,
  "exception" text not null,
  "failed_at" datetime not null default CURRENT_TIMESTAMP
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "customers"(
  "id" integer primary key autoincrement not null,
  "billable_type" varchar not null,
  "billable_id" integer not null,
  "paddle_id" varchar not null,
  "name" varchar not null,
  "email" varchar not null,
  "trial_ends_at" datetime,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE INDEX "customers_billable_type_billable_id_index" on "customers"(
  "billable_type",
  "billable_id"
);
CREATE UNIQUE INDEX "customers_paddle_id_unique" on "customers"("paddle_id");
CREATE TABLE IF NOT EXISTS "subscriptions"(
  "id" integer primary key autoincrement not null,
  "billable_type" varchar not null,
  "billable_id" integer not null,
  "type" varchar not null,
  "paddle_id" varchar not null,
  "status" varchar not null,
  "trial_ends_at" datetime,
  "paused_at" datetime,
  "ends_at" datetime,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE INDEX "subscriptions_billable_type_billable_id_index" on "subscriptions"(
  "billable_type",
  "billable_id"
);
CREATE UNIQUE INDEX "subscriptions_paddle_id_unique" on "subscriptions"(
  "paddle_id"
);
CREATE TABLE IF NOT EXISTS "subscription_items"(
  "id" integer primary key autoincrement not null,
  "subscription_id" integer not null,
  "product_id" varchar not null,
  "price_id" varchar not null,
  "status" varchar not null,
  "quantity" integer not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "subscription_items_subscription_id_price_id_unique" on "subscription_items"(
  "subscription_id",
  "price_id"
);
CREATE TABLE IF NOT EXISTS "transactions"(
  "id" integer primary key autoincrement not null,
  "billable_type" varchar not null,
  "billable_id" integer not null,
  "paddle_id" varchar not null,
  "paddle_subscription_id" varchar,
  "invoice_number" varchar,
  "status" varchar not null,
  "total" varchar not null,
  "tax" varchar not null,
  "currency" varchar not null,
  "billed_at" datetime not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE INDEX "transactions_billable_type_billable_id_index" on "transactions"(
  "billable_type",
  "billable_id"
);
CREATE UNIQUE INDEX "transactions_paddle_id_unique" on "transactions"(
  "paddle_id"
);
CREATE INDEX "transactions_paddle_subscription_id_index" on "transactions"(
  "paddle_subscription_id"
);
CREATE TABLE IF NOT EXISTS "products"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "paddle_product_id" varchar not null,
  "slug" varchar not null,
  "thumbnail" varchar,
  "description" text not null,
  "created_at" datetime,
  "updated_at" datetime,
  "features" text,
  "private_key" text
);
CREATE UNIQUE INDEX "products_slug_unique" on "products"("slug");
CREATE TABLE IF NOT EXISTS "product_prices"(
  "id" integer primary key autoincrement not null,
  "product_id" integer not null,
  "name" varchar not null,
  "description" text not null,
  "features" text,
  "paddle_price_id" varchar not null,
  "amount" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("product_id") references "products"("id") on delete restrict on update restrict
);
CREATE TABLE IF NOT EXISTS "licenses"(
  "id" integer primary key autoincrement not null,
  "user_id" integer not null,
  "product_id" integer not null,
  "product_price_id" integer not null,
  "key" varchar not null,
  "paddle_product_id" varchar,
  "paddle_product_price_id" varchar,
  "satis_authentication_count" integer not null default '0',
  "quantity" integer not null default '1',
  "activation_limit" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime,
  "expires_at" datetime,
  foreign key("user_id") references "users"("id") on delete restrict on update restrict,
  foreign key("product_id") references "products"("id") on delete restrict on update restrict,
  foreign key("product_price_id") references "product_prices"("id") on delete restrict on update restrict
);
CREATE UNIQUE INDEX "licenses_key_unique" on "licenses"("key");
CREATE TABLE IF NOT EXISTS "thumbnails"(
  "id" integer primary key autoincrement not null,
  "product_id" integer not null,
  "name" varchar not null,
  "title" varchar not null,
  "description" text not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("product_id") references "products"("id") on delete restrict on update restrict
);
CREATE TABLE IF NOT EXISTS "media"(
  "id" integer primary key autoincrement not null,
  "model_type" varchar not null,
  "model_id" integer not null,
  "uuid" varchar,
  "collection_name" varchar not null,
  "name" varchar not null,
  "file_name" varchar not null,
  "mime_type" varchar,
  "disk" varchar not null,
  "conversions_disk" varchar,
  "size" integer not null,
  "manipulations" text not null,
  "custom_properties" text not null,
  "generated_conversions" text not null,
  "responsive_images" text not null,
  "order_column" integer,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE INDEX "media_model_type_model_id_index" on "media"(
  "model_type",
  "model_id"
);
CREATE UNIQUE INDEX "media_uuid_unique" on "media"("uuid");
CREATE INDEX "media_order_column_index" on "media"("order_column");
CREATE TABLE IF NOT EXISTS "activations"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "license_id" integer not null,
  "signed_activation" text,
  "current_version" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("license_id") references "licenses"("id") on delete cascade
);
CREATE UNIQUE INDEX "activations_uuid_unique" on "activations"("uuid");
CREATE TABLE IF NOT EXISTS "personal_access_tokens"(
  "id" integer primary key autoincrement not null,
  "tokenable_type" varchar not null,
  "tokenable_id" integer not null,
  "name" varchar not null,
  "token" varchar not null,
  "abilities" text,
  "last_used_at" datetime,
  "expires_at" datetime,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" on "personal_access_tokens"(
  "tokenable_type",
  "tokenable_id"
);
CREATE UNIQUE INDEX "personal_access_tokens_token_unique" on "personal_access_tokens"(
  "token"
);

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2019_05_03_000001_create_customers_table',1);
INSERT INTO migrations VALUES(5,'2019_05_03_000002_create_subscriptions_table',1);
INSERT INTO migrations VALUES(6,'2019_05_03_000003_create_subscription_items_table',1);
INSERT INTO migrations VALUES(7,'2019_05_03_000004_create_transactions_table',1);
INSERT INTO migrations VALUES(8,'2025_02_26_101224_create_product_price_privileges_table',1);
INSERT INTO migrations VALUES(9,'2025_03_19_162631_create_products_table',1);
INSERT INTO migrations VALUES(10,'2025_03_20_222259_create_product_prices_table',1);
INSERT INTO migrations VALUES(11,'2025_03_21_162706_create_licenses_table',1);
INSERT INTO migrations VALUES(12,'2025_03_24_154949_create_thumbnails_table',1);
INSERT INTO migrations VALUES(13,'2025_03_24_155551_create_media_table',1);
INSERT INTO migrations VALUES(14,'2025_03_26_102455_create_activations_table',1);
INSERT INTO migrations VALUES(15,'2025_05_03_123503_create_personal_access_tokens_table',1);
INSERT INTO migrations VALUES(16,'2025_05_04_114627_add_features_to_products_table',1);
INSERT INTO migrations VALUES(17,'2025_05_07_191739_add_is_admin_to_users',1);
INSERT INTO migrations VALUES(19,'2025_05_13_204929_add_expires_at_to_licenses_table',2);
INSERT INTO migrations VALUES(21,'2025_05_13_205838_drop_product_price_privileges_table',3);
INSERT INTO migrations VALUES(23,'2025_05_14_181516_remove_product_price_privilege_id_from_product_prices_table',4);
INSERT INTO migrations VALUES(24,'2025_05_17_112637_drop_columns_from_activations_table',5);
INSERT INTO migrations VALUES(25,'2025_05_17_113356_add_private_key_to_products_table',6);
