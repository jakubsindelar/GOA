class CreateHomeworks < ActiveRecord::Migration
  def change
    create_table :homeworks do |t|
      t.string :name
      t.ingeger :subject_id
      t.date :date
      t.string :note

      t.timestamps
    end
  end
end
