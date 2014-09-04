class CreateTests < ActiveRecord::Migration
  def change
    create_table :tests do |t|
      t.string :name
      t.integer :subject_id
      t.date :start_date
      t.string :note

      t.timestamps
    end
  end
end
